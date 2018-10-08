<?php

namespace App\Http\Controllers\PosJaga;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PosJaga;
use App\Kecamatan;
use App\Wilayah;
use App\Kelurahan;
use Illuminate\Http\Request;
use DB;

class PosJagaController extends Controller
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

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');

        if (!empty($keyword)) {
            $posjaga = PosJaga::where('id_kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('id_kelurahan', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('luas', 'LIKE', "%$keyword%")
                ->orWhere('konstruksi', 'LIKE', "%$keyword%")
                ->orWhere('kondisi', 'LIKE', "%$keyword%")
                ->orWhere('kelengkapan', 'LIKE', "%$keyword%")
                ->orWhere('sarana', 'LIKE', "%$keyword%")
                ->orWhere('aktifitas', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $posjaga = PosJaga::latest()->paginate($perPage);
        }

        return view('posJaga.pos-jaga.index', compact('posjaga','Kecamatan','kelurahan','nmKec'));
    }


        public function Search(Request $request)
        {
            $perPage = $request->post('page');
            $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama')->pluck('nama', 'kd_kec');
            $Kecamatan->prepend('-- Kecamatan --','');
            $kelurahan = array('' => '-- Kelurahan --');

            $posjaga = PosJaga::latest()->paginate($perPage);
            return view('posJaga.pos-jaga.index', compact('posjaga','Kecamatan','kelurahan'));
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');
        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        $konstruksi = '';
        $kondisi = '';
        $kelengkapan = '';
        $sarana = '';
        $aktifitas = '';
        $foto = '';
        return view('posJaga.pos-jaga.create', compact('Kecamatan','kelurahan','foto','konstruksi','kondisi','kelengkapan','sarana','aktifitas'));
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
			'nama' => 'required'
		]);

        $posJaga = new \App\PosJaga;

        $file = $request->foto;

        $namaKecamatan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->first();
        $namaKelurahan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->where('kd_kel_des',$request->input('id_kelurahan'))->first();

        if ($file != "") {
          $foto = time().'posjaga.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/posjaga'), $foto);
          $posJaga->foto = time().'posjaga.'.$request->foto->getClientOriginalExtension();
          $posJaga->id_kecamatan = $request->input('id_kecamatan');
          $posJaga->id_kelurahan = $request->input('id_kelurahan');
          $posJaga->nama = $request->input('nama');
          $posJaga->alamat_kec = $namaKecamatan->nama;
          $posJaga->alamat_kel = $namaKelurahan->nama;
          $posJaga->alamat = $request->input('alamat');
          $posJaga->luas = $request->input('luas');
          $posJaga->konstruksi = $request->input('konstruksi');
          $posJaga->kondisi = $request->input('kondisi');
          $posJaga->luas_tanah = $request->input('luas_tanah');
          $posJaga->kepemilikan = $request->input('kepemilikan');
          $posJaga->kelengkapan = '0';
          $posJaga->sarana = '0';
          $posJaga->aktifitas = $request->input('aktifitas');
          $posJaga->keterangan = $request->input('keterangan');
        }else{
          $posJaga->id_kecamatan = $request->input('id_kecamatan');
          $posJaga->id_kelurahan = $request->input('id_kelurahan');
          $posJaga->alamat_kec = $namaKecamatan->nama;
          $posJaga->alamat_kel = $namaKelurahan->nama;
          $posJaga->nama = $request->input('nama');
          $posJaga->alamat = $request->input('alamat');
          $posJaga->luas = $request->input('luas');
          $posJaga->konstruksi = $request->input('konstruksi');
          $posJaga->kondisi = $request->input('kondisi');
          $posJaga->luas_tanah = $request->input('luas_tanah');
          $posJaga->kepemilikan = $request->input('kepemilikan');
          $posJaga->kelengkapan = '0';
          $posJaga->sarana = '0';
          $posJaga->aktifitas = $request->input('aktifitas');
          $posJaga->keterangan = $request->input('keterangan');
        }

        // $requestData = $request->all();
        // PosJaga::create($requestData);
        $posJaga->save();

        return redirect('posJaga/pos-jaga')->with('flash_message', 'PosJaga added!');
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
        $posjaga = PosJaga::findOrFail($id);

        return view('posJaga.pos-jaga.show', compact('posjaga'));
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
        $posjaga = PosJaga::findOrFail($id);

        $Kecamatan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');

        $kelurahan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$posjaga->id_kecamatan)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('-- Semua Kelurahan/ Desa --','0');

        $konstruksi = $posjaga->konstruksi;
        $kondisi = $posjaga->kondisi;
        // $kelengkapan = $posjaga->kelengkapan;
        // $sarana = $posjaga->sarana;
        $aktifitas = $posjaga->aktifitas;

        $foto = PosJaga::findOrFail($id);
        $foto = $foto->foto;

        return view('posJaga.pos-jaga.edit', compact('posjaga','Kecamatan','kelurahan','foto','konstruksi','kondisi','aktifitas'));
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
    			'nama' => 'required'
    		]);
          $namaKecamatan = Wilayah::where('kd_kec',$request->input('id_kecamatan'))->first();
          $namaKelurahan = Wilayah::where('kd_kel_des',$request->input('id_kelurahan'))->where('kd_kec',$request->input('id_kecamatan'))->first();
        $file = $request->foto;
        if ($file != "") {
          $foto = time().'posjaga.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/posjaga'), $foto);



          $posUpdate = array(
            'foto' => time().'posjaga.'.$request->foto->getClientOriginalExtension(),
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'alamat_kec' => $namaKecamatan->nama,
            'alamat_kel' => $namaKelurahan->nama,
            'alamat' => $request->input('alamat'),
            'luas' => $request->input('luas'),
            'konstruksi' => $request->input('konstruksi'),
            'kondisi' => $request->input('kondisi'),
            'luas_tanah' => $request->input('luas_tanah'),
            'kepemilikan' => $request->input('kepemilikan'),
            'aktifitas' => $request->input('aktifitas'),
            'keterangan' => $request->input('keterangan'),
          );

        }else{
          $posUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'alamat_kec' => $namaKecamatan->nama,
            'alamat_kel' => $namaKelurahan->nama,
            'alamat' => $request->input('alamat'),
            'luas' => $request->input('luas'),
            'konstruksi' => $request->input('konstruksi'),
            'kondisi' => $request->input('kondisi'),
            'luas_tanah' => $request->input('luas_tanah'),
            'kepemilikan' => $request->input('kepemilikan'),
            'aktifitas' => $request->input('aktifitas'),
            'keterangan' => $request->input('keterangan'),
          );
        }


        // $requestData = $request->all();

        // $posjaga = PosJaga::findOrFail($id);
        // $posjaga->update($requestData);
        PosJaga::where('id', $id)->update($posUpdate);
        return redirect('posJaga/pos-jaga')->with('flash_message', 'PosJaga updated!');
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
        $posjaga = PosJaga::findOrFail($id);
        if ($posjaga->foto) {
          unlink('assets/img/posjaga/'.$posjaga->foto);
        }

        PosJaga::where('id', '=', $id)->forceDelete();
        // $destroy->delete();

        return redirect('posJaga/pos-jaga')->with('flash_message', 'Linma deleted!');
    }

    public function getStates($id) {
       // $kelurahan = Wilayah::where('kd_kel_des','!=','00')->orderBy('nama')->where("kd_kec",$id)->pluck("nama","kd_kel_des");
       $kelurahan = \App\Wilayah::where('kd_kel_des','!=','00')->orderBy('nama')->where("kd_kec",$id)->pluck("kd_kel_des","nama");
       $kelurahan->prepend('0','-- Semua Kelurahan/ Desa --');
       return json_encode($kelurahan);

   }

   public function DeletePosJaga(Request $request) {
        // Linma::destroy($id);
        // $destroy = Linma::findOrFail($id);
        $ids = $request->ids;
        // $posjaga = PosJaga::findOrFail($id);

        // if ($posjaga->foto) {
        //   unlink('assets/img/posjaga/'.$posjaga->foto);
        // }

        PosJaga::whereIn('id',explode(",",$ids))->forceDelete();
        // $destroy->delete();

        return redirect('posJaga/pos-jaga')->with('flash_message', 'Linma deleted!');
   }

    public function refreshTable(Request $request)
    {

      // $id_kecamatan = $request->get('id_kecamatan');
      // $id_kelurahan = $request->get('id_kelurahan');
      // $page= $request->get('page');
      //   if (!empty($page)) {
      //     $perPage = $page;
      //   }else{
      //     $perPage = 25;
      //   }
      // $perPage = 25;
      // if($id_kelurahan == "null"){
      //    $id_kelurahan='0';
      // }
      // $query= PosJaga::select('pos_jagas.*');
      
      // if (!empty($id_kecamatan)) $query->where('pos_jagas.id_kecamatan', "$id_kecamatan");
      // if (!empty($id_kelurahan)) $query->where('pos_jagas.id_kelurahan', "$id_kelurahan");
      // $posjaga = $query->paginate($perPage);

      // return json_encode($posjaga);

      $id_kecamatan = $request->id_kecamatan;
      $id_kelurahan = $request->id_kelurahan;

      $query= PosJaga::select('pos_jagas.*');
      
      if (!empty($id_kecamatan)) $query->where('pos_jagas.id_kecamatan', "$id_kecamatan");
      if (!empty($id_kelurahan)) $query->where('pos_jagas.id_kelurahan', "$id_kelurahan");
      $posjaga = $query->get();

      return json_encode($posjaga);
    }
}
