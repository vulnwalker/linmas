<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pendaftaran;
use App\JenisLinma;
use App\Linma;
use App\Kecamatan;
use App\Kelurahan;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    // public function index(Request $request)
    // {
    //     $keyword = $request->get('search');
    //     $perPage = 25;
    //
    //     $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
    //     $Kecamatan->prepend('-- Kecamatan --','');
    //     $kelurahan = array('' => '-- Kelurahan --');
    //
    //     if (!empty($keyword)) {
    //         $pendaftarans = Pendaftaran::where('id_kecamatan', 'LIKE', "%$keyword%")
    //             ->orWhere('id_kelurahan', 'LIKE', "%$keyword%")
    //             ->orWhere('nama', 'LIKE', "%$keyword%")
    //             ->orWhere('email', 'LIKE', "%$keyword%")
    //             ->orWhere('hp', 'LIKE', "%$keyword%")
    //             ->orWhere('no_ktp', 'LIKE', "%$keyword%")
    //             ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
    //             ->orWhere('alamat', 'LIKE', "%$keyword%")
    //             ->orWhere('alamat_kecamatan', 'LIKE', "%$keyword%")
    //             ->orWhere('alamat_kelurahan', 'LIKE', "%$keyword%")
    //             ->orWhere('rt', 'LIKE', "%$keyword%")
    //             ->orWhere('rw', 'LIKE', "%$keyword%")
    //             ->orWhere('status', 'LIKE', "%$keyword%")
    //             ->latest()->paginate($perPage);
    //     } else {
    //         $pendaftarans = Pendaftaran::latest()->paginate($perPage);
    //     }
    //
    //     return view('pendaftaran.pendaftaran.index', compact('pendaftarans','Kecamatan','kelurahan'));
    // }


    public function index(Request $request)
    {
        $id_kecamatan = $request->get('id_kecamatan');
        $id_kelurahan = $request->get('id_kelurahan');
        $paging= $request->get('paging');
        $status= $request->get('status');
        $alamat = $request->get('alamat');
        $alamat_kecamatan = $request->get('alamat_kecamatan');
        $alamat_kelurahan = $request->get('alamat_kelurahan');
        $rt = $request->get('rt');
        $rw = $request->get('rw');
        $jenis_kelamin = $request->get('jenis_kelamin');

        $keyword = $request->get('search');
        $fieldData = $request->get('fieldData');

        if (!empty($paging)) {
          $perPage = $paging;
        }else{
          $perPage = 25;
        }

        $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
        $Kecamatan->prepend('-- Kecamatan --','');
        $kelurahan = array('' => '-- Kelurahan --');
        $JenisLinmas = JenisLinma::pluck('uraian', 'id');
        $JenisLinmas->prepend('-- Jenis Linmas --','');

        if (!empty($keyword) || !empty($id_kecamatan) || !empty($id_kelurahan) || !empty($status) || !empty($jenis_kelamin)  || !empty($alamat) || !empty($alamat_kecamatan) || !empty($rt)|| !empty($rw)) {
            $query = Pendaftaran::select('pendaftarans.*', 'kecamatans.kecamatan','kelurahans.kelurahan')
            ->join('kecamatans', 'kecamatans.id' , '=','pendaftarans.id_kecamatan')
            ->join('kelurahans', 'kelurahans.id', '=', 'pendaftarans.id_kelurahan');


            if (!empty($keyword)) $query->where("pendaftarans."."$fieldData", 'like', "%$keyword%");
            if (!empty($id_kecamatan)) $query->where('pendaftarans.id_kecamatan', $id_kecamatan);
            if (!empty($id_kelurahan)) $query->where('pendaftarans.id_kelurahan', $id_kelurahan);
            if (!empty($status)) $query->where('pendaftarans.status', $status);
            if (!empty($jenis_kelamin)) $query->where('pendaftarans.jenis_kelamin', $jenis_kelamin);
            if (!empty($alamat)) $query->where('pendaftarans.alamat', 'like', "%$alamat%");
            if (!empty($alamat_kecamatan)) $query->where('pendaftarans.alamat_kecamatan', 'like', "%$alamat_kecamatan%");
            if (!empty($alamat_kelurahan)) $query->where('pendaftarans.alamat_kelurahan', 'like', "%$alamat_kelurahan%");
            if (!empty($rt)) $query->where('pendaftarans.rt', 'like', "%$rt%");
            if (!empty($rw)) $query->where('pendaftarans.rw', 'like', "%$rw%");


            $pendaftarans = $query->latest()->paginate($perPage);
        } else {
            // $linmas = Linma::latest()->paginate($perPage);
            $pendaftarans = Pendaftaran::select('pendaftarans.*', 'kecamatans.kecamatan','kelurahans.kelurahan')
            ->join('kecamatans', 'kecamatans.id' , '=','pendaftarans.id_kecamatan')
            ->join('kelurahans', 'kelurahans.id', '=', 'pendaftarans.id_kelurahan')
            // ->where('linmas.alamat', 'dasd')
            ->paginate($perPage);
        }

        return view('pendaftaran.pendaftaran.index', compact('pendaftarans','Kecamatan','kelurahan','JenisLinmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */

     public function getStates($id) {
        $kelurahan = Kelurahan::where("id_kecamatan",$id)->pluck("kelurahan","id");
        $kelurahan->prepend('','0');
        return json_encode($kelurahan);

    }

    public function create()
    {
      $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
      $Kecamatan->prepend('','');
      $kelurahan = array('' => '');
      $statusLimas = '';
      $jenis_kelamin = '';
      $foto = '';
        return view('pendaftaran.pendaftaran.create',compact('Kecamatan','kelurahan','statusLimas','foto','jenis_kelamin'));
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
			'email' => 'required',
			'no_ktp' => 'required',
			'jenis_kelamin' => 'required'
		]);

    $pendaftaran = new \App\Pendaftaran;

    $file = $request->foto;
    if ($file != "") {
      $foto = time().'pendaftaran.'.$request->foto->getClientOriginalExtension();
      $request->foto->move(public_path('assets/img/pendaftaran'), $foto);
      $pendaftaran->id_kecamatan = $request->input('id_kecamatan');
      $pendaftaran->id_kelurahan = $request->input('id_kelurahan');
      $pendaftaran->nama = $request->input('nama');
      $pendaftaran->foto = time().'pendaftaran.'.$request->foto->getClientOriginalExtension();
      $pendaftaran->alamat = $request->input('alamat');
      $pendaftaran->alamat_kecamatan = $request->input('alamat_kecamatan');
      $pendaftaran->alamat_kelurahan = $request->input('alamat_kelurahan');
      $pendaftaran->rt = $request->input('rt');
      $pendaftaran->rw = $request->input('rw');
      $pendaftaran->email = $request->input('email');
      $pendaftaran->jenis_kelamin = $request->input('jenis_kelamin');

      $pendaftaran->no_ktp = $request->input('no_ktp');
      $pendaftaran->hp = $request->input('hp');
      $pendaftaran->status = '2';
    }else{
      $pendaftaran->id_kecamatan = $request->input('id_kecamatan');
      $pendaftaran->id_kelurahan = $request->input('id_kelurahan');
      $pendaftaran->nama = $request->input('nama');
      $pendaftaran->alamat = $request->input('alamat');
      $pendaftaran->alamat_kecamatan = $request->input('alamat_kecamatan');
      $pendaftaran->alamat_kelurahan = $request->input('alamat_kelurahan');
      $pendaftaran->rt = $request->input('rt');
      $pendaftaran->rw = $request->input('rw');
      $pendaftaran->email = $request->input('email');
      $pendaftaran->jenis_kelamin = $request->input('jenis_kelamin');
      $pendaftaran->no_ktp = $request->input('no_ktp');
      $pendaftaran->hp = $request->input('hp');
      $pendaftaran->status = '2';
    }

    $pendaftaran->save();

        return redirect('pendaftaran/pendaftaran')->with('flash_message', 'Pendaftaran added!');
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
        $pendaftaran = Pendaftaran::select('pendaftarans.*', 'kecamatans.kecamatan','kelurahans.kelurahan')
        ->join('kecamatans', 'kecamatans.id' , '=','pendaftarans.id_kecamatan')
        ->join('kelurahans', 'kelurahans.id', '=', 'pendaftarans.id_kelurahan')
        ->findOrFail($id);
        return view('pendaftaran.pendaftaran.show', compact('pendaftaran'));
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

        $pendaftaran = Pendaftaran::findOrFail($id);
        $Kecamatan = Kecamatan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');

        $kelurahan = Kelurahan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kelurahan', 'id');
        $kelurahan->prepend('','');

        $foto = Pendaftaran::findOrFail($id);
        $foto = $foto->foto;

        $jenis_kelamin = $pendaftaran->jenis_kelamin;


        return view('pendaftaran.pendaftaran.edit', compact('pendaftaran','Kecamatan','kelurahan','foto','jenis_kelamin'));
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
			'email' => 'required',
			'no_ktp' => 'required',
			'jenis_kelamin' => 'required',
		]);

        $file = $request->foto;
        if ($file != "") {
          $foto = time().'pendaftaran.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/pendaftaran'), $foto);

          $PendaftaranUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'foto' => time().'pendaftaran.'.$request->foto->getClientOriginalExtension(),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $request->input('alamat_kecamatan'),
            'alamat_kelurahan' => $request->input('alamat_kelurahan'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),

            'no_ktp' => $request->input('no_ktp'),
            'hp' => $request->input('hp'),
            'status' => '2'
          );

        }else{
          $PendaftaranUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'alamat_kecamatan' => $request->input('alamat_kecamatan'),
            'alamat_kelurahan' => $request->input('alamat_kelurahan'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'no_ktp' => $request->input('no_ktp'),
            'hp' => $request->input('hp'),
            'status' => '2'
          );
        }


        Pendaftaran::where('id', $id)->update($PendaftaranUpdate);


        // $pendaftaran = Pendaftaran::findOrFail($id);
        // $pendaftaran->update($requestData);

        return redirect('pendaftaran/pendaftaran')->with('flash_message', 'Pendaftaran updated!');
    }

    public function linmas(Request $request, $id)
    {
      $limas = new \App\Linma;
      $pendaftaran = Pendaftaran::findOrFail($id);
      $file = $pendaftaran->foto;
      if ($file != "") {
        copy('assets/img/pendaftaran/'.$pendaftaran->foto, 'assets/img/linmas/'.$pendaftaran->foto);
        $limas->id_kecamatan = $pendaftaran->id_kecamatan;
        $limas->id_kelurahan = $pendaftaran->id_kelurahan;
        $limas->nama = $pendaftaran->nama;
        $limas->foto = $pendaftaran->foto;
        $limas->alamat = $pendaftaran->alamat;
        $limas->alamat_kecamatan = $pendaftaran->alamat_kecamatan;
        $limas->alamat_kelurahan = $pendaftaran->alamat_kelurahan;
        $limas->rt = $pendaftaran->rt;
        $limas->rw = $pendaftaran->rw;
        $limas->email = $pendaftaran->email;
        $limas->jenis_kelamin = $pendaftaran->jenis_kelamin;
        $limas->jenis_linmas = $request->input('jenis_linmas');
        $limas->no_doc = $request->input('no_doc');

        $limas->no_ktp = $pendaftaran->no_ktp;
        $limas->hp = $pendaftaran->hp;
        $limas->status_linmas = '2';

        $PendaftaranUpdate = array(
          'status' => '1'
        );
        Pendaftaran::where('id', $id)->update($PendaftaranUpdate);

      }else{
        $limas->id_kecamatan = $pendaftaran->id_kecamatan;
        $limas->id_kelurahan = $pendaftaran->id_kelurahan;
        $limas->nama = $pendaftaran->nama;
        $limas->foto = $pendaftaran->foto;
        $limas->alamat = $pendaftaran->alamat;
        $limas->alamat_kecamatan = $pendaftaran->alamat_kecamatan;
        $limas->alamat_kelurahan = $pendaftaran->alamat_kelurahan;
        $limas->rt = $pendaftaran->rt;
        $limas->rw = $pendaftaran->rw;
        $limas->email = $pendaftaran->email;
        $limas->jenis_kelamin = $pendaftaran->jenis_kelamin;
        $limas->jenis_linmas = $request->input('jenis_linmas');
        $limas->no_doc = $request->input('no_doc');

        $limas->no_ktp = $pendaftaran->no_ktp;
        $limas->hp = $pendaftaran->hp;
        $limas->status_linmas = '2';

        $PendaftaranUpdate = array(
          'status' => '1'
        );
        Pendaftaran::where('id', $id)->update($PendaftaranUpdate);
      }

      $limas->save();

      return redirect('pendaftaran/pendaftaran');
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
      $pendaftaran = Pendaftaran::findOrFail($id);
      if ($pendaftaran->foto) {
              unlink('assets/img/pendaftaran/'.$pendaftaran->foto);
      }

      Pendaftaran::where('id', '=', $id)->forceDelete();
        // Pendaftaran::destroy($id);

        return redirect('pendaftaran/pendaftaran')->with('flash_message', 'Pendaftaran deleted!');
    }
}
