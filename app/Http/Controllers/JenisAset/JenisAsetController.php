<?php

namespace App\Http\Controllers\JenisAset;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Http\Request;

class JenisAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        return view('jenisAset.jenisAset.index');
    }

    public function insJnsAset(Request $request){

        $jns_asset   = $request->jns_asset;

        $ins = DB::table("jns_aset")->insert([
            'jns_asset'  => $jns_asset
        ]);

        return json_encode($ins);
    }

    public function srcJnsAset(Request $request){
        $jns_aset = $request->jns_aset;

        $tables = DB::table("jns_aset")
                    ->where("nm_aset", "like", "%$jns_aset%")
                    ->get();

        return json_encode($tables);
    }

    public function delJnsAset(Request $request){
        $id = $request->id;
        $delJnsAset = DB::table('jns_aset')->whereIn('id', '=', $id)->delete();
        return json_encode($delJnsAset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenisAset.jenisAset.create');
    }

    public function myform()
    {

        $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');

        return view('kelurahan.kelurahan.create',compact('Kecamatan'));

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
			'kelurahan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'email' => 'required'
		]);
        $requestData = $request->all();

        Kelurahan::create($requestData);

        return redirect('kelurahan/kelurahan')->with('flash_message', 'Kelurahan added!');
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
        $kelurahan = Kelurahan::findOrFail($id);

        return view('kelurahan.kelurahan.show', compact('kelurahan'));
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
        $kelurahan = Kelurahan::findOrFail($id);
        $Kecamatan = Kecamatan::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('kecamatan', 'id');
$Kecamatan->prepend('','');
        return view('kelurahan.kelurahan.edit', compact('kelurahan','Kecamatan'));
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
			'kelurahan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'email' => 'required'
		]);
        $requestData = $request->all();

        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->update($requestData);

        return redirect('kelurahan/kelurahan')->with('flash_message', 'Kelurahan updated!');
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
        Kelurahan::destroy($id);

        return redirect('kelurahan/kelurahan')->with('flash_message', 'Kelurahan deleted!');
    }
}
