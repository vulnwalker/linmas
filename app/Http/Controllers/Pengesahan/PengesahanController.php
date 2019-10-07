<?php

namespace App\Http\Controllers\Pengesahan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JenisLinma;
use App\Linma;
use App\Kecamatan;
use App\Kelurahan;
use App\Wilayah;
use App\Sk;
use App\Jabatan;
use Illuminate\Http\Request;

class PengesahanController extends Controller
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
        $Jabatan = Jabatan::pluck('nama', 'id');
        $Jabatan->prepend('','');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $Jenispengesahan = JenisLinma::pluck('uraian', 'id');
        $Jenispengesahan->prepend('-- Jenis pengesahan --','');

        if (!empty($keyword)) {
            $pengesahan = Linma::where('nama', 'LIKE', "%$keyword%")
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
            $pengesahan = Linma::select('linmas.*','surat_keputusan.nomor')
            ->leftJoin('surat_keputusan', 'surat_keputusan.id' , '=','linmas.no_sk')
            ->latest()->paginate($perPage);
            $sk = Sk::get();

        }

        return view('pengesahan.pengesahan.index', compact('Jabatan','pengesahan','sk','Kecamatan','kelurahan','Jenispengesahan'));
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

         return view('pengesahan.pengesahan.create',compact('Kecamatan'));

     }

    public function create()
    {
        $Jenispengesahan = JenisLinma::pluck('uraian', 'id');
        $Jenispengesahan->prepend('','');
        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $statusLimas = '';
        $uk_baju  = '';
        $jenis_kelamin = '';
        $foto = '';
        return view('pengesahan.pengesahan.create',compact('Kecamatan','kelurahan','statusLimas','foto','Jenispengesahan','jenis_kelamin','uk_baju'));
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
        $namaKelurahan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->where('kd_kel_des',$request->input('id_kelurahan'))->first();

        if ($file != "") {
          $foto = time().'pengesahan.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/pengesahan'), $foto);
          $limas->id_kecamatan = $request->input('id_kecamatan');
          $limas->id_kelurahan = $request->input('id_kelurahan');
          $limas->no_angota = $request->input('no_angota');

          $limas->nama = $request->input('nama');
          $limas->tgl_lahir = $request->input('tgl_lahir');
          $limas->tempat_lahir = $request->input('tempat_lahir');
          $limas->foto = time().'pengesahan.'.$request->foto->getClientOriginalExtension();
          $limas->alamat = $request->input('alamat');
          $limas->alamat_kecamatan = $namaKecamatan->nama;
          $limas->alamat_kelurahan = $namaKelurahan->nama;
          $limas->rt = $request->input('rt');
          $limas->rw = $request->input('rw');
          $limas->email = "";
          $limas->jenis_kelamin = $request->input('jenis_kelamin');
          $limas->jenis_pengesahan = "0";
          $limas->no_sk = "";

          $limas->no_ktp = $request->input('no_ktp');
          $limas->uk_baju = $request->input('uk_baju');
          $limas->uk_sepatu = $request->input('uk_sepatu');
          $limas->keterangan = $request->input('keterangan');
          $limas->hp = $request->input('hp');
          $limas->status_pengesahan = "0";
        }else{
          $limas->id_kecamatan = $request->input('id_kecamatan');
          $limas->id_kelurahan = $request->input('id_kelurahan');
          $limas->no_angota = $request->input('no_angota');
          $limas->nama = $request->input('nama');
          $limas->tgl_lahir = $request->input('tgl_lahir');
          $limas->tempat_lahir = $request->input('tempat_lahir');
          $limas->alamat = $request->input('alamat');
          $limas->alamat_kecamatan = $namaKecamatan->nama;
          $limas->alamat_kelurahan = $namaKelurahan->nama;
          $limas->rt = $request->input('rt');
          $limas->rw = $request->input('rw');
          $limas->email = "";
          $limas->jenis_kelamin = $request->input('jenis_kelamin');
          $limas->jenis_pengesahan = "0";
          $limas->no_sk = "";
          $limas->no_ktp = $request->input('no_ktp');
          $limas->uk_baju = $request->input('uk_baju');
          $limas->uk_sepatu = $request->input('uk_sepatu');
          $limas->keterangan = $request->input('keterangan');
          $limas->hp = $request->input('hp');
          $limas->status_pengesahan = "0";
        }

        $limas->save();



        // $requestData = $request->all();
        // Linma::create($requestData);

        return redirect('pengesahan/pengesahan')->with('flash_message', 'Linma added!');
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
        $linma = Linma::select('pengesahan.*', 'kecamatans.kecamatan','kelurahans.kelurahan','jenis_pengesahan.uraian')
        ->join('kecamatans', 'kecamatans.id' , '=','pengesahan.id_kecamatan')
        ->join('kelurahans', 'kelurahans.id', '=', 'pengesahan.id_kelurahan')
        ->join('jenis_pengesahan', 'jenis_pengesahan.id', '=', 'pengesahan.jenis_pengesahan')
        ->findOrFail($id);

        return view('pengesahan.pengesahan.show', compact('linma'));
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

        $Jenispengesahan = JenisLinma::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('uraian', 'id');
        $Jenispengesahan->prepend('','');

        $Kecamatan = Wilayah::all()->sortBy('kd_kec', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('','');

        $kelurahan = Wilayah::all()->sortBy('kd_kel_des', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$linma->id_kecamatan)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('','');

        $foto = Linma::findOrFail($id);
        $foto = $foto->foto;

        $jenis_kelamin = $linma->jenis_kelamin;
        $uk_baju = $linma->uk_baju;

        $statusLimas = $linma->status_pengesahan;
        return view('pengesahan.pengesahan.edit', compact('linma','Kecamatan','kelurahan','statusLimas','foto','Jenispengesahan','jenis_kelamin','uk_baju'));
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
          $namaKelurahan = Wilayah::where('kd_kel_des',$request->input('id_kelurahan'))->where('kd_kec',$request->input('id_kecamatan'))->first();
        if ($file != "") {
          $foto = time().'pengesahan.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/pengesahan'), $foto);
          $pengesahanUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'foto' => time().'pengesahan.'.$request->foto->getClientOriginalExtension(),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $namaKecamatan->nama,
            'alamat_kelurahan' => $namaKelurahan->nama,
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),

            'jenis_kelamin' => $request->input('jenis_kelamin'),


            'no_ktp' => $request->input('no_ktp'),
            'hp' => $request->input('hp'),
            'status_pengesahan' => $request->input('status_pengesahan')
          );

        }else{
          $pengesahanUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $namaKecamatan->nama,
            'alamat_kelurahan' => $namaKelurahan->nama,
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),

            'jenis_kelamin' => $request->input('jenis_kelamin'),

            'no_ktp' => $request->input('no_ktp'),
            'uk_baju' => $request->input('uk_baju'),
            'uk_sepatu' => $request->input('uk_sepatu'),
            'keterangan' => $request->input('keterangan'),
            'hp' => $request->input('hp'),
            'status_pengesahan' => $request->input('status_pengesahan')
          );
        }


        Linma::where('id', $id)->update($pengesahanUpdate);

        return redirect('pengesahan/pengesahan')->with('flash_message', 'Linma updated!');
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
          unlink('assets/img/pengesahan/'.$linma->foto);
        }

        Linma::where('id', '=', $id)->forceDelete();
        // $destroy->delete();

        return redirect('pengesahan/pengesahan')->with('flash_message', 'Linma deleted!');
    }

    public function delete($id)
    {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $linma = Linma::findOrFail($id);
        if ($linma->foto) {
          unlink('assets/img/pengesahan/'.$linma->foto);
        }

        Linma::where('id', '=', $id)->forceDelete();
        // $destroy->delete();

        return redirect('pengesahan/pengesahan')->with('flash_message', 'Linma deleted!');
    }

      public function Deletepengesahan(Request $request) {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $ids = $request->ids;
        // $posjaga = PosJaga::findOrFail($id);

        // if ($posjaga->foto) {
        //   unlink('assets/img/posjaga/'.$posjaga->foto);
        // }

        Linma::whereIn('id',explode(",",$ids))->forceDelete();
        // $destroy->delete();

        return redirect('pengesahan/pengesahan')->with('flash_message', 'Linma deleted!');
   }
   public function DeleteNoSk(Request $request) {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $ids = $request->ids;
        // $posjaga = PosJaga::findOrFail($id);

        // if ($posjaga->foto) {
        //   unlink('assets/img/posjaga/'.$posjaga->foto);
        // }

        Sk::whereIn('id',explode(",",$ids))->forceDelete();
        // $destroy->delete();

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

      $query= Linma::select('linmas.*','surat_keputusan.nomor','users.name')
            ->join('users', 'users.id' , '=','linmas.user_id')
            ->leftJoin('surat_keputusan', 'surat_keputusan.id' , '=','linmas.no_sk');

      if (!empty($id_kecamatan)) $query->where('linmas.id_kecamatan', "$id_kecamatan");
      if (!empty($id_kelurahan)) $query->where('linmas.id_kelurahan', "$id_kelurahan");
      if (!empty($status_linmas) || $status_linmas == '0') $query->where('linmas.status_linmas', "$status_linmas");
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

      $pengesahan = $query->latest()->get();

      return json_encode($pengesahan);
    }
    public function refreshTableSk(Request $request)
    {
      $query= Sk::select('surat_keputusan.*');
      $sk = $query->get();

      return json_encode($sk);
    }

    public function PengesahanGetKode(Request $request)
    {

      $max = Linma::where('status_linmas','1')->count('id');
      $Sk = Sk::findOrFail($request->ids);
      if ($request->kode_angota != "") {
        $auto_kode = $request->kode_angota;
      }else{
        $auto_kode = str_pad($max + 1, 3, "0",  STR_PAD_LEFT);
      }

      $tahun = explode('-',$Sk->tanggal);


      $data = array(
            'nomor_sk' => $Sk->no_sk,
            'kode' => $tahun[0].'.'.$auto_kode,
            'tanggal' => $tahun[2].'-'.$tahun[1].'-'.$tahun[0],
            );

      return json_encode($data);
    }

    public function GetPengesahan(Request $request)
    {

      $linmas = Linma::select('linmas.*','surat_keputusan.nomor','surat_keputusan.tanggal')
            ->leftJoin('surat_keputusan', 'surat_keputusan.id' , '=','linmas.no_sk')->findOrFail($request->ids);
      if ($linmas->no_angota != "") {

        $explodeKode = explode('.', $linmas->no_angota);
        $explodeTanggalSK = explode('-',$linmas->tanggal);
      	$data = array(
                    'jenis_linmas' => $linmas->jenis_linmas,
                    'no_sk' => $linmas->nomor,
                    'tanggal_sk' => $explodeTanggalSK[2].'-'.$explodeTanggalSK[1].'-'.$explodeTanggalSK[0],
                    'no_angota' => $linmas->no_angota,
                    'kode_angota' => $explodeKode[1],
                    'id_sk' => $linmas->no_sk,
                    );
      }else{
      	$data = "";
      }

      return json_encode($data);
    }


    public function TambahSk(Request $request)
    {
        $explodeTanggalSK = explode('/',$request->tgl_sk);
        $Sk = new \App\Sk;
        $Sk->nomor = $request->no_sk;
        $Sk->tanggal = $explodeTanggalSK[2].'-'.$explodeTanggalSK[0].'-'.$explodeTanggalSK[1];
        $Sk->save();
    }

    public function PengesahanCreate(Request $request)
    {

        $ids = $request->ids;

        if ($request->jabatanLinmas != null) {
          $jabatanNama= Jabatan::findOrFail($request->jabatanLinmas);
          $namaJabatan = $jabatanNama->nama;
          $jabatanLinmas = $request->jabatanLinmas;
        }else{
          $namaJabatan = '';
          $jabatanLinmas = '';
        }
        $pengesahanUpdate = array(
            'no_angota' => $request->no_angota,
            'jenis_linmas' => $jabatanLinmas,
            'no_sk' => $request->id_sk,
            'status_linmas' => '1',
            'jabatan' => $namaJabatan,
        );

        Linma::whereIn('id',explode(",",$ids))->update($pengesahanUpdate);


    }

    public function PengesahanBatalkan(Request $request)
    {

        $ids = $request->ids;
        $pengesahanUpdate = array(
            'no_angota' => '',
            'jenis_linmas' => '0',
            'no_sk' => '',
            'status_linmas' => '0',
            'jabatan' => ''
        );

        Linma::whereIn('id',explode(",",$ids))->update($pengesahanUpdate);


    }


    public function checkCard(Request $request)
    {


      // $linmas = Linma::findOrFail($request->ids);
      $linmas = Linma::whereIn('id',explode(",",$request->ids))->selectRaw("MIN(status_linmas) AS status_linmas")->get();
      if ($linmas[0]->status_linmas === '1') {
        $data = "1";
      }else{
        $data = "0";
      }

      return $data;
    }

    public function cardPrint($id, Request $request)
    {

      $pengesahan = Linma::select('linmas.*','surat_keputusan.nomor','surat_keputusan.tanggal')
            ->leftJoin('surat_keputusan', 'surat_keputusan.id' , '=','linmas.no_sk')
            ->whereIn('linmas.id', explode(",",$id))
            ->get();

      return view('printCard', compact('pengesahan'));
    }
}
