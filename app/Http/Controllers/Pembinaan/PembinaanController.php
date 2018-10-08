<?php

namespace App\Http\Controllers\Pembinaan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Wilayah;
use App\Linma;
use App\Pembinaan;
use Illuminate\Http\Request;
use App\Jabatan;
use App\TempPembinaan;
use App\DetailPembinaan;
use Auth;
class PembinaanController extends Controller
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

        if (!empty($keyword)) {
            $pembinaan = Pembinaan::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_mulai', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_selesai', 'LIKE', "%$keyword%")
                ->orWhere('penyelengara', 'LIKE', "%$keyword%")
                ->orWhere('narasumber', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pembinaan = Pembinaan::latest()->paginate($perPage);
        }

        return view('pembinaan.pembinaan.index', compact('pembinaan'));
    }

    public function DataLinmas(Request $request)
    {

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $Jabatan = Jabatan::pluck('nama', 'id');
        $Jabatan->prepend('','0');

        $query= Linma::select('linmas.*');

        $linmas = $query->where('status_linmas','1')->latest()->get();
        return view('pembinaan.pembinaan.create', compact('linmas','Kecamatan','kelurahan','Jabatan'));
    }

    public function TmpLinmas(Request $request)
    {
        $tanggal_mulai='';
        $tanggal_selesai ='';
        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $Jabatan = Jabatan::pluck('nama', 'id');
        $Jabatan->prepend('','0');
        $users = Auth::user();
        $query= TempPembinaan::select('temp_pembinaan.id as Ids','linmas.*')
                  ->join('linmas', 'linmas.id' , '=','temp_pembinaan.id_linmas');
        
        $linmas= Linma::select('linmas.*')->where('status_linmas','1')->latest()->get();
        $tempPembinaan = $query->where('id_user',$users->id)->where('status_linmas','1')->latest()->get();
        return view('pembinaan.pembinaan.create', compact('tempPembinaan','linmas','Kecamatan','kelurahan','Jabatan','tanggal_mulai','tanggal_selesai'));
    }

    public function DataDetailPembinaan(Request $request)
    {

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $Jabatan = Jabatan::pluck('nama', 'id');
        $Jabatan->prepend('','0');
        $users = Auth::user();
        $query= DetailPembinaan::select('detail_pembinaan.id as Ids','linmas.*')
                  ->join('linmas', 'linmas.id' , '=','detail_pembinaan.id_linmas');
        
        $linmas= Linma::select('linmas.*')->where('status_linmas','1')->latest()->get();
        $tempPembinaan = $query->where('id_user',$users->id)->where('status_linmas','1')->latest()->get();
        return view('pembinaan.pembinaan.edit', compact('tempPembinaan','Kecamatan','kelurahan','Jabatan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tanggal_mulai='';
        $tanggal_selesai ='';
        return view('pembinaan.pembinaan.create', compact('tanggal_mulai','tanggal_selesai'));
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
        // nama    tanggal_mulai   tanggal_selesai penyelengara    narasumber
        // $requestData = $request->all();
        
        // Pembinaan::create($requestData);
        
        $explodeTanggalMulai = explode('/',$request->input('tanggal_mulai'));
        $explodeTanggalSelesai = explode('/',$request->input('tanggal_selesai'));
        $pembinaan = new \App\Pembinaan;
        $pembinaan->nama = $request->input('nama');
        $pembinaan->tanggal_mulai = $explodeTanggalMulai[2].'-'.$explodeTanggalMulai[0].'-'.$explodeTanggalMulai[1];
        $pembinaan->tanggal_selesai = $explodeTanggalSelesai[2].'-'.$explodeTanggalSelesai[0].'-'.$explodeTanggalSelesai[1];
        $pembinaan->penyelengara = $request->input('penyelengara');
        $pembinaan->narasumber = $request->input('narasumber');
        $pembinaan->lokasi = $request->input('lokasi');
        $pembinaan->kegiatan = $request->input('kegiatan');
        
        $pembinaan->save();


        $id_pembinaan = Pembinaan::max('id');
        $users = Auth::user();
        $query= TempPembinaan::select('temp_pembinaan.*');
        $tempPembinaan = $query->where('id_user',$users->id)->get();

        foreach ($tempPembinaan as $row){
            $detail_pembinaan[] = [
                'id_linmas' => $row['id_linmas'],
                'id_pembinaan' => $id_pembinaan,
                'id_user' => $row['id_user'],
            ];
        }

       DetailPembinaan::insert($detail_pembinaan); 
       TempPembinaan::where('id_user',$users->id)->forceDelete();

        return redirect('pembinaan/pembinaan')->with('flash_message', 'Pembinaan added!');
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
        $pembinaan = Pembinaan::findOrFail($id);

        return view('pembinaan.pembinaan.show', compact('pembinaan'));
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
        $pembinaan = Pembinaan::findOrFail($id);
        $users = Auth::user();

        $explodeTanggalMulai = explode('-',$pembinaan->tanggal_mulai);
        $explodeTanggalSelesai = explode('-',$pembinaan->tanggal_selesai);
        $tanggal_mulai = $explodeTanggalMulai[1].'/'.$explodeTanggalMulai[2].'/'.$explodeTanggalMulai[0];
        $tanggal_selesai = $explodeTanggalSelesai[1].'/'.$explodeTanggalSelesai[2].'/'.$explodeTanggalSelesai[0];

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $Jabatan = Jabatan::pluck('nama', 'id');
        $Jabatan->prepend('','0');
        $users = Auth::user();
        $query= TempPembinaan::select('temp_pembinaan.id as Ids','linmas.*')
                  ->join('linmas', 'linmas.id' , '=','temp_pembinaan.id_linmas');
        
        $linmas= Linma::select('linmas.*')->where('status_linmas','1')->latest()->get();
        $tempPembinaan = $query->where('id_user',$users->id)->where('status_linmas','1')->latest()->get();

        return view('pembinaan.pembinaan.edit', compact('pembinaan','linmas','tempPembinaan','tanggal_mulai','tanggal_selesai','Kecamatan','kelurahan','Jabatan'));
    }

    public function editTmp(Request $request)
    {
      
      $pembinaan = Pembinaan::findOrFail($request->ids);
      $users = Auth::user();
      TempPembinaan::where('id_user',$users->id)->forceDelete();
      $query= DetailPembinaan::select('detail_pembinaan.*');
      $tempPembinaan = $query->where('id_pembinaan',$pembinaan->id)->where('id_user',$users->id)->get();
      $detail_pembinaan  = array();
      foreach ($tempPembinaan as $row){
            $detail_pembinaan[] = array(
                'id_linmas' => $row['id_linmas'],
                'id_user' => $row['id_user'],
            );
        }

       TempPembinaan::insert($detail_pembinaan);
       return "success";
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
        
        // $requestData = $request->all();
        
        $pembinaan = Pembinaan::findOrFail($id);

        $explodeTanggalMulai = explode('/',$request->input('tanggal_mulai'));
        $explodeTanggalSelesai = explode('/',$request->input('tanggal_selesai'));

        $PembinaanUpdate = array(
            'nama' => $request->input('nama'),
            'penyelengara' => $request->input('penyelengara'),
            'tanggal_mulai' => $explodeTanggalMulai[2].'-'.$explodeTanggalMulai[0].'-'.$explodeTanggalMulai[1],
            'tanggal_selesai' => $explodeTanggalSelesai[2].'-'.$explodeTanggalSelesai[0].'-'.$explodeTanggalSelesai[1],
          );


        $users = Auth::user();
        $query= TempPembinaan::select('temp_pembinaan.*');
        $tempPembinaan = $query->where('id_user',$users->id)->get();

          foreach ($tempPembinaan as $row){
              $DetailPembinaanUpdate[] = [
                  'id_linmas' => $row['id_linmas'],
                  'id_pembinaan' => $id,
                  'id_user' => $row['id_user'],
              ];
          }
          // $DetailPembinaanUpdate = array(
          //   'id_kecamatan' => $request->input('id_kecamatan'),
          //   'id_kelurahan' => $request->input('id_kelurahan'),
          // );


        Pembinaan::where('id', $id)->update($PembinaanUpdate);
        DetailPembinaan::where('id_pembinaan', $id)->where('id_user', $users->id)->forceDelete();
        DetailPembinaan::where('id_pembinaan', $id)->where('id_user', $users->id)->insert($DetailPembinaanUpdate);
        return redirect('pembinaan/pembinaan')->with('flash_message', 'Pembinaan updated!');
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
        Pembinaan::destroy($id);

        return redirect('pembinaan/pembinaan')->with('flash_message', 'Pembinaan deleted!');
    }
    public function refreshTableLinmas(Request $request)
    {
      $id_kecamatan = $request->id_kecamatan;
      $id_kelurahan = $request->id_kelurahan;
      $jabatan = $request->jabatan;
      $namaLinmas = $request->namaLinmas;
      $noAnggota = $request->noAnggota;

      $query= Linma::select('linmas.*');

      if (!empty($id_kecamatan)) $query->where('linmas.id_kecamatan', "$id_kecamatan");
      if (!empty($id_kelurahan)) $query->where('linmas.id_kelurahan', "$id_kelurahan");
      if (!empty($jabatan)) $query->where('linmas.jenis_linmas', "$jabatan");
      if (!empty($namaLinmas)) $query->where('linmas.nama','like', "%$namaLinmas%");
      if (!empty($noAnggota)) $query->where('linmas.no_angota','like', "%$noAnggota%");
      
      $pembinaan = $query->where('status_linmas','1')->latest()->get();

      return json_encode($pembinaan);
    }

    public function CreateToTmp(Request $request)
    {
        $Check = TempPembinaan::where('id_linmas', '=', $request->id)->where('id_user', '=', $request->id_user)->count();
        if ($Check == 0) {
            $TempPembinaan = new \App\TempPembinaan;
            $TempPembinaan->id_linmas = $request->id;
            $TempPembinaan->id_user = $request->id_user;
            $TempPembinaan->save();
        }else{

        }

    }

    public function refreshTableTmp(Request $request)
    {
        $users = Auth::user();
        $query= TempPembinaan::select('temp_pembinaan.id as Ids','linmas.*')
                  ->join('linmas', 'linmas.id' , '=','temp_pembinaan.id_linmas');
        
        $tempPembinaan = $query->where('id_user',$users->id)->where('status_linmas','1')->latest()->get();

        return json_encode($tempPembinaan);
    }

    public function refreshPembinaan(Request $request)
    {
      $nama = $request->nama;
      $penyelengara = $request->penyelengara;
      $tanggal_mulai = $request->tanggal_mulai;
      $tanggal_selesai = $request->tanggal_selesai;
      $dari = "";
      $sampai ="";
      if (!empty($tanggal_mulai)){
        $tanggalMulaiExplode = explode('/',$request->tanggal_mulai);
        $dari =  date($tanggalMulaiExplode[2].'-'.$tanggalMulaiExplode[0].'-'.$tanggalMulaiExplode[1]);
      }   

     if (!empty($tanggal_selesai)){
        $tanggalSelesaiExplode = explode('/',$request->tanggal_selesai);
        $sampai = date($tanggalSelesaiExplode[2].'-'.$tanggalSelesaiExplode[0].'-'.$tanggalSelesaiExplode[1]);
      }   

      $query= Pembinaan::select('pembinaans.*');
      
      if (!empty($nama)) $query->where('pembinaans.nama','LIKE', "%$nama%");
      if (!empty($penyelengara)) $query->where('pembinaans.penyelengara','LIKE', "%$penyelengara%");
      if (!empty($tanggal_mulai) && empty($tanggal_selesai)){
        $query->where('tanggal_mulai','<=', $dari);
      } 
      if (!empty($tanggal_mulai) && !empty($tanggal_selesai)){
        $query->whereBetween('tanggal_mulai', [$dari, $sampai]);
      } 
      
      $pembinaans = $query->get();

      return json_encode($pembinaans);
    }

    public function DeleteTmplinmas(Request $request) {

        $ids = $request->ids;

        $users = Auth::user();
        TempPembinaan::whereIn('id',explode(",",$ids))->where('id_user',$users->id)->forceDelete();

        // return redirect('pembinaan/pembinaan/create')->with('flash_message', 'Linma deleted!');
   }

   public function DeletePembinaan(Request $request) {

        $ids = $request->ids;

        $users = Auth::user();
        Pembinaan::whereIn('id',explode(",",$ids))->forceDelete();
        DetailPembinaan::whereIn('id_pembinaan',explode(",",$ids))->where('id_user',$users->id)->forceDelete();

        return redirect('pembinaan/pembinaan')->with('flash_message', 'Linma deleted!');
   }

    public function TambahPembinaan(){
           $users = Auth::user();
        TempPembinaan::where('id_user',$users->id)->forceDelete();
    }

}
