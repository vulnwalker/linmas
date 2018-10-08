<?php

namespace App\Http\Controllers\Lokasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;
use App\Kelurahan;
use App\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
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
            $lokasi = Lokasi::where('id_kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('id_kelurahan', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('lokasi', 'LIKE', "%$keyword%")
                ->orWhere('kondisi', 'LIKE', "%$keyword%")
                ->orWhere('kelengkapan', 'LIKE', "%$keyword%")
                ->orWhere('sarpras', 'LIKE', "%$keyword%")
                ->orWhere('aktifitas', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lokasi = Lokasi::latest()->paginate($perPage);
        }

        return view('lokasi.lokasi.index', compact('lokasi'));
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

         return view('lokasi.lokasi.create',compact('Kecamatan'));

     }

    public function create()
    {
      $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
      $Kecamatan->prepend('','');
      $kelurahan = array('' => '');
      $kelengkapan = '';
      $sarpras = '';
      $aktifitas = '';
      $foto = '';
        return view('lokasi.lokasi.create',compact('Kecamatan','kelurahan','kelengkapan','sarpras','aktifitas','foto'));
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
			'id_kelurahan' => '',
			'nama' => 'required',
			'lokasi' => 'required',
			'kelengkapan' => 'required',
			'sarpras' => 'required',
			'aktifitas' => 'required',
			'foto' => ''
		]);



        $lokasi = new \App\Lokasi;
        $file = $request->foto;
        if ($file != "") {
          $foto = time().'lokasi.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/lokasi'), $foto);
          $lokasi->id_kecamatan = $request->input('id_kecamatan');
          $lokasi->id_kelurahan = $request->input('id_kelurahan');
          $lokasi->nama = $request->input('nama');
          $lokasi->lokasi = $request->input('lokasi');
          $lokasi->kondisi = $request->input('kondisi');
          $lokasi->kelengkapan = $request->input('kelengkapan');
          $lokasi->sarpras = $request->input('sarpras');
          $lokasi->aktifitas = $request->input('aktifitas');
          $lokasi->foto = time().'lokasi.'.$request->foto->getClientOriginalExtension();
        }else{
          $lokasi->id_kecamatan = $request->input('id_kecamatan');
          $lokasi->id_kelurahan = $request->input('id_kelurahan');
          $lokasi->nama = $request->input('nama');
          $lokasi->lokasi = $request->input('lokasi');
          $lokasi->kondisi = $request->input('kondisi');
          $lokasi->kelengkapan = $request->input('kelengkapan');
          $lokasi->sarpras = $request->input('sarpras');
          $lokasi->aktifitas = $request->input('aktifitas');
        }

        $lokasi->save();
        // $requestData = $request->all();
        //
        // Lokasi::create($requestData);

        return redirect('lokasi/lokasi')->with('flash_message', 'Lokasi added!');
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
        $lokasi = Lokasi::findOrFail($id);

        return view('lokasi.lokasi.show', compact('lokasi'));
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
        $lokasi = Lokasi::findOrFail($id);

        $Kecamatan = Kecamatan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');

        $kelurahan = Kelurahan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kelurahan', 'id');
        $kelurahan->prepend('','');

        $foto = Lokasi::findOrFail($id);
        $foto = $foto->foto;

        $kelengkapan = $lokasi->kelengkapan;
        $sarpras = $lokasi->sarpras;
        $aktifitas = $lokasi->aktifitas;

        return view('lokasi.lokasi.edit', compact('lokasi','kelengkapan','sarpras','aktifitas','Kecamatan','kelurahan','foto'));
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
			'id_kelurahan' => '',
			'nama' => 'required',
			'lokasi' => 'required',
			'kelengkapan' => 'required',
			'sarpras' => 'required',
			'aktifitas' => 'required',
			'foto' => ''
		]);
        // $requestData = $request->all();
        //
        // $lokasi = Lokasi::findOrFail($id);
        // $lokasi->update($requestData);


        $file = $request->foto;
        if ($file != "") {
          $foto = time().'lokasi.'.$request->foto->getClientOriginalExtension();
          $request->foto->move(public_path('assets/img/lokasi'), $foto);
          $lokasiUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'kondisi' => $request->input('kondisi'),
            'kelengkapan' => $request->input('kelengkapan'),
            'sarpras' => $request->input('sarpras'),
            'aktifitas' => $request->input('aktifitas'),
            'foto' => time().'lokasi.'.$request->foto->getClientOriginalExtension()
          );
        }else{
          $lokasiUpdate = array(
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kecamatan' => $request->input('id_kecamatan'),
            'id_kelurahan' => $request->input('id_kelurahan'),
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'kondisi' => $request->input('kondisi'),
            'kelengkapan' => $request->input('kelengkapan'),
            'sarpras' => $request->input('sarpras'),
            'aktifitas' => $request->input('aktifitas')
          );
        }
        // $lokasi = new \App\Lokasi;

        // $lokasi->update();


        Lokasi::where('id', $id)->update($lokasiUpdate);

        return redirect('lokasi/lokasi')->with('flash_message', 'Lokasi updated!');
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

        $Lokasi = Lokasi::findOrFail($id);
        unlink('assets/img/lokasi/'.$Lokasi->foto);
        Lokasi::where('id', '=', $id)->forceDelete();

        return redirect('lokasi/lokasi')->with('flash_message', 'Lokasi deleted!');
    }
}
