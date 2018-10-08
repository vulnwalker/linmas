<?php

namespace App\Http\Controllers\Sapras;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sapra;
use App\JenisLinma;
use App\Linma;
use App\Kecamatan;
use App\Kelurahan;
use App\Wilayah;
use App\JenisSapras;
use Illuminate\Http\Request;
use DB;

class SaprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $jenisSapras = JenisSapras::pluck('nama', 'id');
        $jenisSapras->prepend('-- Semua Sapras --','0');
        $Kecamatan->prepend('-- Kecamatan --','');
        $kelurahan = array('' => '-- Kelurahan / Desa --');
        if (!empty($keyword)) {
            $sapras = Sapra::where('jenis_sapras', 'LIKE', "%$keyword%")
                ->orWhere('merk', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('spesifikasi', 'LIKE', "%$keyword%")
                ->orWhere('tahun', 'LIKE', "%$keyword%")
                ->orWhere('kondisi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sapras = Sapra::select('sapras.*','jns_sapras.nama')->join('jns_sapras', 'sapras.jenis_sapras', '=', 'jns_sapras.id')->latest()->paginate($perPage);
        }

        return view('sapras.sapras.index', compact('sapras','Kecamatan','kelurahan'), compact('sapras','Kecamatan','kelurahan','jenisSapras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Kecamatan --','');
        $kelurahan = array('' => '-- Kelurahan / Desa --');
        $uk_baju = "";
        $slcSapras = DB::table("jns_sapras")->orderBy('nama', 'asc')
                 ->pluck("nama","id");
        $slcSapras->prepend('-- Pilih Jenis Sapras --','');
        $kondisi = '';
        $jenis_saprasOld = '';
        return view('sapras.sapras.create', compact('Kecamatan','kelurahan','uk_baju','slcSapras','kondisi','jenis_saprasOld'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'jenis_sapras' => 'required'
		]);
        $requestData = $request->all();
        
        Sapra::create($requestData);
        $StatusJenisSapras = array(
            'status' => '1', 
        );
        JenisSapras::where('id', $request->input('jenis_sapras'))->update($StatusJenisSapras); 
        return redirect('sapras/sapras')->with('flash_message', 'Sapra added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $sapra = Sapra::findOrFail($id);

        return view('sapras.sapras.show', compact('sapra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */

     public function edit($id)
    {
        $sapra = Sapra::findOrFail($id);
        $Kecamatan = Wilayah::all()->sortBy('kd_kec', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('','0');

        $kelurahan = Wilayah::all()->sortBy('kd_kel_des', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$sapra->id_kecamatan)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('-- Semua Kelurahan/ Desa --','0');

        $slcSapras = DB::table("jns_sapras")
                 ->pluck("nama","id");
        $slcSapras->prepend('-- SELECT --','');
        $kondisi = $sapra->kondisi;
        $jenis_saprasOld = $sapra->jenis_sapras;
        return view('sapras.sapras.edit', compact('sapra','Kecamatan','kelurahan','slcSapras','kondisi','jenis_saprasOld'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'jenis_sapras' => 'required'
		]);
        $requestData = $request->all();
        
        $sapra = Sapra::findOrFail($id);
        $beforeStat = $request->input('jenis_saprasOld');
        $sapra->update($requestData);


        $cekSapras = Sapra::where('jenis_sapras', '=', $request->input('jenis_sapras'))->count();
        if ($cekSapras == 0) {
            $StatusJenisSapras = array(
                'status' => '2', 
            );
        }else{
            $StatusJenisSapras = array(
                'status' => '1', 
            );
        }

        JenisSapras::where('id', $request->input('jenis_sapras'))->update($StatusJenisSapras);
        // update2nd
        $cek2nd = Sapra::where('jenis_sapras', '=', $beforeStat)->count();

        if ($cek2nd == 0) {
            $status2nd = array(
                'status' => '2', 
            );
        }else{
            $status2nd = array(
                'status' => '1', 
            );
        }

        JenisSapras::where('id',$beforeStat)->update($status2nd);

        return redirect('sapras/sapras')->with('flash_message', 'Sapra updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Sapra::destroy($id);

        return redirect('sapras/sapras')->with('flash_message', 'Sapra deleted!');
    }

    public function srcSapras(Request $request){
        $jns_sapras = $request->jns_sapras;
        $id_kecamatan = $request->id_kecamatan;
        $jns_sapras = $request->jns_sapras;

        $query= Sapra::select('sapras.*','jns_sapras.nama')->join('jns_sapras', 'sapras.jenis_sapras', '=', 'jns_sapras.id');
      
        if (!empty($id_kecamatan)) $query->where('sapras.id_kecamatan', "$id_kecamatan");
        if (!empty($id_kelurahan)) $query->where('sapras.id_kelurahan', "$id_kelurahan");
        if (!empty($jns_sapras)) $query->where('sapras.jenis_sapras', "$jns_sapras");
        $sapras = $query->get();

        return json_encode($sapras);
    }

    public function delSapras(Request $request){
        $id     = $request->id;
        $err    = "";
        $cek    = "";

       
        $sapras = Sapra::whereIn('id',$id)->get();
        $ids = $id;
        foreach($ids as $key) {
            $key = trim($key);
            $delSapras = DB::table('sapras')->where('id', $key)->delete();
            
        foreach ($sapras as $row){
           $jenis_sapras =  $row['jenis_sapras'];
           
            $cekSapras = Sapra::where('jenis_sapras', '=',$jenis_sapras )->count();
            if ($cekSapras == 0) {
                $StatusJenisSapras = array(
                    'status' => '2', 
                );
            }else{
                $StatusJenisSapras = array(
                    'status' => '1', 
                );
            }
            
            JenisSapras::where('id',$jenis_sapras )->update($StatusJenisSapras);
        }

    }    
        



        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }
}
