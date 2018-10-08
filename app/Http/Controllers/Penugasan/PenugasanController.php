<?php

namespace App\Http\Controllers\Penugasan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Penugasan_linma;
use App\JenisLinma;
use App\Linma;
use App\Kecamatan;
use App\Kelurahan;
use App\Penugasan;
use Illuminate\Http\Request;

class PenugasanController extends Controller
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
        $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');
        $kelurahan = array('' => '');

        if (!empty($keyword)) {
            $penugasans = Penugasan::where('id_kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('id_kelurahan', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('status_pendaftaran', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $penugasans = Penugasan::latest()->paginate($perPage);
        }

        return view('penugasan.penugasan.index', compact('penugasans','Kecamatan','kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
      $Kecamatan->prepend('','');
      $kelurahan = array('' => '');
      $status = '';
      $status_pendaftaran = '';

      $linmas = Linma::select('linmas.*', 'kecamatans.kecamatan','kelurahans.kelurahan','jenis_linmas.uraian')
      ->join('kecamatans', 'kecamatans.id' , '=','linmas.id_kecamatan')
      ->join('kelurahans', 'kelurahans.id', '=', 'linmas.id_kelurahan')
      ->join('jenis_linmas', 'jenis_linmas.id', '=', 'linmas.jenis_linmas')
      ->where('linmas.status_linmas', '2')
      ->whereNOTIn('linmas.id',function($query){
         $query->select('id_linmas')->from('penugasan_linmas');
      })
      ->get();

      return view('penugasan.penugasan.createPenugasan',compact('Kecamatan','kelurahan','status','status_pendaftaran','linmas'));
    }

    public function table()
    {

      $linmas = Linma::select('linmas.*', 'kecamatans.kecamatan','kelurahans.kelurahan','jenis_linmas.uraian')
      ->join('kecamatans', 'kecamatans.id' , '=','linmas.id_kecamatan')
      ->join('kelurahans', 'kelurahans.id', '=', 'linmas.id_kelurahan')
      ->join('jenis_linmas', 'jenis_linmas.id', '=', 'linmas.jenis_linmas')
      ->where('linmas.status_linmas', '2')
      ->whereNOTIn('linmas.id',function($query){
         $query->select('id_linmas')->from('penugasan_linmas');
      })
      ->get();

      return view('penugasan.penugasan.linmas',compact('linmas'));
    }
    public function deleteTmp(){
      $id_user = @$_POST['idUser'];
      Penugasan_linma::where('id_user', '=', $id_user)->forceDelete();
    }

    public function insertLinmas(){

      $limas = new \App\Penugasan_linma;
      $limas->id_linmas = @$_POST['idLinmas'];
      $limas->id_user = @$_POST['idUser'];
      $limas->save();

      return array('success' => 'wwkwkkw');
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
			'id_kecamatan' => 'required',
			'id_kelurahan' => 'required',
			'nama' => 'required',
			'status' => 'required',
			'status_pendaftaran' => 'required'
		]);
        $requestData = $request->all();

        Penugasan::create($requestData);

        return redirect('penugasan/penugasan')->with('flash_message', 'Penugasan added!');
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
        $penugasan = Penugasan::findOrFail($id);

        return view('penugasan.penugasan.show', compact('penugasan'));
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
        $penugasan = Penugasan::findOrFail($id);

        return view('penugasan.penugasan.edit', compact('penugasan'));
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
			'id_kecamatan' => 'required',
			'id_kelurahan' => 'required',
			'nama' => 'required',
			'status' => 'required',
			'status_pendaftaran' => 'required'
		]);
        $requestData = $request->all();

        $penugasan = Penugasan::findOrFail($id);
        $penugasan->update($requestData);

        return redirect('penugasan/penugasan')->with('flash_message', 'Penugasan updated!');
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
        Penugasan::destroy($id);

        return redirect('penugasan/penugasan')->with('flash_message', 'Penugasan deleted!');
    }
}
