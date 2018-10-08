<?php

namespace App\Http\Controllers\AsetLimas;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;
use App\Kelurahan;
use App\AsetLima;
use Illuminate\Http\Request;

class AsetLimasController extends Controller
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
            $asetlimas = AsetLima::where('id_kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('id_kelurahan', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('kode_aset', 'LIKE', "%$keyword%")
                ->orWhere('jumlah', 'LIKE', "%$keyword%")
                ->orWhere('tahun_produksi', 'LIKE', "%$keyword%")
                ->orWhere('tahun_perolehan', 'LIKE', "%$keyword%")
                ->orWhere('merk', 'LIKE', "%$keyword%")
                ->orWhere('kondisi', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $asetlimas = AsetLima::latest()->paginate($perPage);
        }

        return view('asetLimas.aset-limas.index', compact('asetlimas'));
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

         return view('asetLimas.aset-limas.create',compact('Kecamatan'));

     }


    public function create()
    {
      $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
      $Kecamatan->prepend('','');
      $kelurahan = array('' => '');
      $foto = '';

      $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
      $Kecamatan->prepend('','');
        return view('asetLimas.aset-limas.create',compact('Kecamatan','kelurahan','foto'));
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
			'kode_aset' => 'required',
			'jumlah' => 'required',
			'tahun_produksi' => 'required',
			'tahun_perolehan' => 'required',
			'merk' => 'required',
			'kondisi' => 'required',
			'foto' => ''
		]);



      $AsetLima = new \App\AsetLima;

      $file = $request->foto;
      if ($file != "") {
        $foto = time().'aset.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('assets/img/aset'), $foto);
        $AsetLima->id_kecamatan = $request->input('id_kecamatan');
        $AsetLima->id_kelurahan = $request->input('id_kelurahan');
        $AsetLima->nama = $request->input('nama');
        $AsetLima->kode_aset = $request->input('kode_aset');
        $AsetLima->jumlah = $request->input('jumlah');
        $AsetLima->tahun_produksi = $request->input('tahun_produksi');
        $AsetLima->tahun_perolehan = $request->input('tahun_perolehan');
        $AsetLima->merk = $request->input('merk');
        $AsetLima->kondisi = $request->input('kondisi');
        $AsetLima->foto = time().'aset.'.$request->foto->getClientOriginalExtension();
      }else{
        $AsetLima->id_kecamatan = $request->input('id_kecamatan');
        $AsetLima->id_kelurahan = $request->input('id_kelurahan');
        $AsetLima->nama = $request->input('nama');
        $AsetLima->kode_aset = $request->input('kode_aset');
        $AsetLima->jumlah = $request->input('jumlah');
        $AsetLima->tahun_produksi = $request->input('tahun_produksi');
        $AsetLima->tahun_perolehan = $request->input('tahun_perolehan');
        $AsetLima->merk = $request->input('merk');
        $AsetLima->kondisi = $request->input('kondisi');
      }


      $AsetLima->save();

        // $requestData = $request->all();
        //
        // AsetLima::create($requestData);

        return redirect('asetLimas/aset-limas')->with('flash_message', 'AsetLima added!');
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
        $asetlima = AsetLima::findOrFail($id);

        return view('asetLimas.aset-limas.show', compact('asetlima'));
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
        $asetlima = AsetLima::findOrFail($id);

        $Kecamatan = Kecamatan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');

        $kelurahan = Kelurahan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kelurahan', 'id');
        $kelurahan->prepend('','');

        $foto = AsetLima::findOrFail($id);
        $foto = $foto->foto;

        return view('asetLimas.aset-limas.edit', compact('asetlima','Kecamatan','kelurahan','statusLimas','foto'));
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
			'kode_aset' => 'required',
			'jumlah' => 'required',
			'tahun_produksi' => 'required',
			'tahun_perolehan' => 'required',
			'merk' => 'required',
			'kondisi' => 'required',
			'foto' => ''
		]);

    $file = $request->foto;
    if ($file != "") {
      $foto = time().'aset.'.$request->foto->getClientOriginalExtension();
      $request->foto->move(public_path('assets/img/aset'), $foto);

      $AsetLinmasUpdate = array(
        'id_kecamatan' => $request->input('id_kecamatan'),
        'id_kelurahan' => $request->input('id_kelurahan'),
        'nama' => $request->input('nama'),
        'kode_aset' => $request->input('kode_aset'),
        'jumlah' => $request->input('jumlah'),
        'tahun_produksi' => $request->input('tahun_produksi'),
        'tahun_perolehan' => $request->input('tahun_perolehan'),
        'merk' => $request->input('merk'),
        'kondisi' => $request->input('kondisi'),
        'foto' => time().'aset.'.$request->foto->getClientOriginalExtension()
      );

    }else{
      $AsetLinmasUpdate = array(
        'id_kecamatan' => $request->input('id_kecamatan'),
        'id_kelurahan' => $request->input('id_kelurahan'),
        'nama' => $request->input('nama'),
        'kode_aset' => $request->input('kode_aset'),
        'jumlah' => $request->input('jumlah'),
        'tahun_produksi' => $request->input('tahun_produksi'),
        'tahun_perolehan' => $request->input('tahun_perolehan'),
        'merk' => $request->input('merk'),
        'kondisi' => $request->input('kondisi')
      );
    }




        AsetLima::where('id', $id)->update($AsetLinmasUpdate);

        // $requestData = $request->all();

        // $asetlima = AsetLima::findOrFail($id);
        // $asetlima->update($requestData);

        return redirect('asetLimas/aset-limas')->with('flash_message', 'AsetLima updated!');
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
        // AsetLima::destroy($id);
        $AsetLima= AsetLima::findOrFail($id);
        unlink('assets/img/aset/'.$AsetLima->foto);
        AsetLima::where('id', '=', $id)->forceDelete();

        return redirect('asetLimas/aset-limas')->with('flash_message', 'AsetLima deleted!');
    }
}
