<?php

namespace App\Http\Controllers\Linmas;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\JenisLinma;
use App\Linma;
use App\Kecamatan;
use App\Kelurahan;
use App\Wilayah;
use Illuminate\Http\Request;

class LinmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $paging= $request->get('paging');
        $perPage = 25;

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $JenisLinmas = JenisLinma::pluck('uraian', 'id');
        $JenisLinmas->prepend('-- Jenis Linmas --','');

        if (!empty($keyword)) {
            $linmas = Linma::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('email', 'LIKE', "%$keyword%")
            ->orWhere('hp', 'LIKE', "%$keyword%")
            ->orWhere('no_ktp', 'LIKE', "%$keyword%")
            ->orWhere('alamat', 'LIKE', "%$keyword%")
            ->orWhere('alamat_kecamatan', 'LIKE', "%$keyword%")
            ->orWhere('alamat_kelurahan', 'LIKE', "%$keyword%")
            ->orWhere('rt', 'LIKE', "%$keyword%")
            ->orWhere('rw', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $linmas = Linma::where('status_linmas','0')->latest()->paginate($perPage);

        }

        return view('linmas.linmas.index', compact('linmas','Kecamatan','kelurahan','JenisLinmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
     public function myform()
     {

         $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
         $Kecamatan->prepend('','');

         return view('linmas.linmas.create',compact('Kecamatan'));

     }

    public function create()
    {
        $JenisLinmas = JenisLinma::pluck('uraian', 'id');
        $JenisLinmas->prepend('','');
        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $statusLimas = '';
        $uk_baju  = '';
        $jenis_kelamin = 'Laki-Laki';
        $foto = '';

        $status = 'Kawin';
        $agama ='Islam';
        $gol_darah = '';
        $pendidikan = '';
        return view('linmas.linmas.create',compact('status','agama','gol_darah','pendidikan','Kecamatan','kelurahan','statusLimas','foto','JenisLinmas','jenis_kelamin','uk_baju'));
    }

    public function getStates($id) {
       $kelurahan = Kelurahan::where("id_kecamatan",$id)->pluck("kelurahan","id");
       $kelurahan->prepend('','0');
       return json_encode($kelurahan);

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
      'nama' => 'required',
      'no_ktp' => 'required',
      'jenis_kelamin' => 'required',
    ]);



        $limas = new \App\Linma;

        $file = $request->foto;
        $namaKecamatan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->first();
        

          if ($request->input('id_kelurahan') == '0') {
            $KelurahanNama = '';
          }else{
            $namaKelurahan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->where('kd_kel_des',$request->input('id_kelurahan'))->first();
            $KelurahanNama = $namaKelurahan->nama;
          }

        $users = Auth::user();
        if ($file != "") {
          $foto = time().'linmas.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/linmas'), $foto);
          $limas->id_kecamatan = $request->input('id_kecamatan');
          $limas->id_kelurahan = $request->input('id_kelurahan');
          $limas->no_angota = $request->input('no_angota');

          $limas->nama = $request->input('nama');
          $limas->tgl_lahir = $request->input('tgl_lahir');
          $limas->tempat_lahir = $request->input('tempat_lahir');
          $limas->foto = time().'linmas.'.$request->foto->getClientOriginalExtension();
          $limas->alamat = $request->input('alamat');
          $limas->alamat_kecamatan = $namaKecamatan->nama;
          $limas->alamat_kelurahan = $KelurahanNama;
          $limas->rt = $request->input('rt');
          $limas->rw = $request->input('rw');
          $limas->email = "";
          $limas->jenis_kelamin = $request->input('jenis_kelamin');
          $limas->jenis_linmas = "0";
          $limas->no_sk = "";

          $limas->no_ktp = $request->input('no_ktp');
          $limas->uk_baju = $request->input('uk_baju');
          $limas->uk_sepatu = $request->input('uk_sepatu');
          $limas->keterangan = $request->input('keterangan');
          $limas->hp = $request->input('hp');
          $limas->status = $request->input('status');
          $limas->agama = $request->input('agama');
          $limas->gol_darah = $request->input('gol_darah');
          $limas->pendidikan = $request->input('pendidikan');
          $limas->status_linmas = "0";
          $limas->user_id =  $users->id;
          $limas->jabatan =  '';
        }else{
          $limas->id_kecamatan = $request->input('id_kecamatan');
          $limas->id_kelurahan = $request->input('id_kelurahan');
          $limas->no_angota = $request->input('no_angota');
          $limas->nama = $request->input('nama');
          $limas->tgl_lahir = $request->input('tgl_lahir');
          $limas->tempat_lahir = $request->input('tempat_lahir');
          $limas->alamat = $request->input('alamat');
          $limas->alamat_kecamatan = $namaKecamatan->nama;
          $limas->alamat_kelurahan = $KelurahanNama;
          $limas->rt = $request->input('rt');
          $limas->rw = $request->input('rw');
          $limas->email = "";
          $limas->jenis_kelamin = $request->input('jenis_kelamin');
          $limas->jenis_linmas = "0";
          $limas->no_sk = "";
          $limas->no_ktp = $request->input('no_ktp');
          $limas->uk_baju = $request->input('uk_baju');
          $limas->uk_sepatu = $request->input('uk_sepatu');
          $limas->keterangan = $request->input('keterangan');
          $limas->hp = $request->input('hp');
          $limas->status = $request->input('status');
          $limas->agama = $request->input('agama');
          $limas->gol_darah = $request->input('gol_darah');
          $limas->pendidikan = $request->input('pendidikan');
          $limas->status_linmas = "0";
          $limas->user_id =  $users->id;
          $limas->jabatan =  '';
        }

        $limas->save();



        // $requestData = $request->all();
        // Linma::create($requestData);

        return redirect('linmas/linmas')->with('flash_message', 'Linma added!');
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
        $linma = Linma::select('linmas.*', 'kecamatans.kecamatan','kelurahans.kelurahan','jenis_linmas.uraian')
        ->join('kecamatans', 'kecamatans.id' , '=','linmas.id_kecamatan')
        ->join('kelurahans', 'kelurahans.id', '=', 'linmas.id_kelurahan')
        ->join('jenis_linmas', 'jenis_linmas.id', '=', 'linmas.jenis_linmas')
        ->findOrFail($id);

        return view('linmas.linmas.show', compact('linma'));
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
        $linma = Linma::findOrFail($id);

        $JenisLinmas = JenisLinma::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('uraian', 'id');
        $JenisLinmas->prepend('','');

        $Kecamatan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('','0');

        $kelurahan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$linma->id_kecamatan)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('-- Semua Kelurahan/ Desa --','0');

        $foto = Linma::findOrFail($id);
        $foto = $foto->foto;

        $jenis_kelamin = $linma->jenis_kelamin;
        $uk_baju = $linma->uk_baju;

        $statusLimas = $linma->status_linmas;

          $status = $linma->status;
          $agama =$linma->agama;
          $gol_darah = $linma->gol_darah;
          $pendidikan = $linma->pendidikan;

        return view('linmas.linmas.edit', compact('status','agama','gol_darah','pendidikan','linma','Kecamatan','kelurahan','statusLimas','foto','JenisLinmas','jenis_kelamin','uk_baju'));
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
      'nama' => 'required',
      'no_ktp' => 'required',
      'jenis_kelamin' => 'required',
    ]);


        // $requestData = $request->all();
        //
        // $linma = Linma::findOrFail($id);
        // $linma->update($requestData);
        $file = $request->foto;
          $namaKecamatan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->first();
          
          if ($request->input('id_kelurahan') == '0') {
            $KelurahanNama = '';
          }else{
            $namaKelurahan = Wilayah::where('kd_kel_des',$request->input('id_kelurahan'))->where('kd_kec',$request->input('id_kecamatan'))->first();
            $KelurahanNama = $namaKelurahan->nama;
          }
        if ($file != "") {
          $foto = time().'linmas.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/linmas'), $foto);
          $LinmasUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'foto' => time().'linmas.'.$request->foto->getClientOriginalExtension(),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $namaKecamatan->nama,
            'alamat_kelurahan' => $KelurahanNama,
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),

            'jenis_kelamin' => $request->input('jenis_kelamin'),


            'no_ktp' => $request->input('no_ktp'),
            'uk_baju' => $request->input('uk_baju'),
            'uk_sepatu' => $request->input('uk_sepatu'),
            'hp' => $request->input('hp'),
             'status' => $request->input('status'),
            'agama' => $request->input('agama'),
            'gol_darah' => $request->input('gol_darah'),
            'pendidikan' => $request->input('pendidikan'),
            'status_linmas' => '0',
            'keterangan' => $request->input('keterangan'),
            'jabatan' => '',
          );

        }else{
          $LinmasUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $namaKecamatan->nama,
            'alamat_kelurahan' => $KelurahanNama,
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),

            'jenis_kelamin' => $request->input('jenis_kelamin'),

            'no_ktp' => $request->input('no_ktp'),
            'uk_baju' => $request->input('uk_baju'),
            'uk_sepatu' => $request->input('uk_sepatu'),
            'keterangan' => $request->input('keterangan'),
            'hp' => $request->input('hp'),
            'status' => $request->input('status'),
            'agama' => $request->input('agama'),
            'gol_darah' => $request->input('gol_darah'),
            'pendidikan' => $request->input('pendidikan'),
            'status_linmas' => '0',
            'jabatan' => '',
          );
        }


        Linma::where('id', $id)->update($LinmasUpdate);

        return redirect('linmas/linmas')->with('flash_message', 'Linma updated!');
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
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $linma = Linma::findOrFail($id);
        if ($linma->foto) {
          unlink('assets/img/linmas/'.$linma->foto);
        }

        Linma::where('id', '=', $id)->forceDelete();
        // $destroy->delete();

        return redirect('linmas/linmas')->with('flash_message', 'Linma deleted!');
    }

    public function delete($id)
    {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $linma = Linma::findOrFail($id);
        if ($linma->foto) {
          unlink('assets/img/linmas/'.$linma->foto);
        }

        Linma::where('id', '=', $id)->forceDelete();
        // $destroy->delete();

        return redirect('linmas/linmas')->with('flash_message', 'Linma deleted!');
    }

      public function DeleteLinmas(Request $request) {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $ids = $request->ids;
        // $posjaga = PosJaga::findOrFail($id);

        // if ($posjaga->foto) {
        //   unlink('assets/img/posjaga/'.$posjaga->foto);
        // }
        $cek = "";
        $linmas = Linma::where('id',$ids)->get();
        if ($linmas[0]->status_linmas === '1') {
          $cek = '0';
        }

        if(!empty($request->hapus)){
          Linma::whereIn('id',explode(",",$ids))->forceDelete();

        }
        // Linma::whereIn('id',explode(",",$ids))->forceDelete();
        // $destroy->delete();

        // return redirect('linmas/linmas')->with('flash_message', 'Linma deleted!');
        return $cek;
   }


       public function refreshTable(Request $request)
    {

      $id_kecamatan = $request->id_kecamatan;
      $id_kelurahan = $request->id_kelurahan;
      $nama = $request->nama;
      $status_linmas = $request->status_linmas;
      $no_ktp = $request->no_ktp;
      $hp = $request->hp;
      $rt = $request->rt;
      $rw = $request->rw;
      $agama = $request->agama;
      $jenis_kelamin = $request->jenis_kelamin;
      $status = $request->status;
      $pendidikan = $request->pendidikan;
      $alamat = $request->alamat;


      $query= Linma::select('linmas.*');
      
      if (!empty($id_kecamatan)) $query->where('linmas.id_kecamatan', "$id_kecamatan");
      if (!empty($id_kelurahan)) $query->where('linmas.id_kelurahan', "$id_kelurahan");
      if (!empty($nama)) $query->where('linmas.nama','LIKE', "%$nama%");
      if (!empty($no_ktp)) $query->where('linmas.no_ktp','LIKE', "%$no_ktp%");
      if (!empty($hp)) $query->where('linmas.hp','LIKE', "%$hp%");
      if (!empty($rt)) $query->where('linmas.rt', "$rt");
      if (!empty($rw)) $query->where('linmas.rw', "$rw");
      if (!empty($agama)) $query->where('linmas.agama', "$agama");
      if (!empty($jenis_kelamin)) $query->where('linmas.jenis_kelamin', "$jenis_kelamin");
      if (!empty($status)) $query->where('linmas.status', "$status");
      if (!empty($pendidikan)) $query->where('linmas.pendidikan', "$pendidikan");
      if (!empty($alamat)) $query->where('linmas.alamat','LIKE', "%$alamat%");
      $linmas = $query->where('status_linmas', $status_linmas)->get();

      return json_encode($linmas);
    }
}
