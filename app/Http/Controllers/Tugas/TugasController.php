<?php

namespace App\Http\Controllers\Tugas;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Http\Request;
use DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        $jenislinmas = DB::table("jns_tugas")
                 ->select("id","nm_tugas","sifat")
                 ->get();
        return view('tugas.tugas.index', compact("jenislinmas"));
    }

    public function insJnsTugas(Request $request){

        $nm_tugas   = $request->nm_tugas;
        $sifat      = $request->sifat;

        $ins = DB::table("jns_tugas")->insert([
            'nm_tugas'  => $nm_tugas,
            'sifat'     => $sifat
        ]);

        return json_encode($ins);
    }

    public function srcTugas(Request $request){
        $jns_tugas = $request->jns_tugas;
        $sifat = $request->sifat;

        $tables = DB::table("jns_tugas")
                    ->where("nm_tugas", "like", "%$jns_tugas%")
                    ->where("sifat", "like", "%$sifat%")
                    ->select("id","nm_tugas", "sifat")
                    ->get();

        return json_encode($tables);
    }

    public function delTugas(Request $request){
        $id = $request->id;
        $delTugas = DB::table('jns_tugas')->whereIn('id', '=', $id)->delete();
        return json_encode($delTugas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tugas.tugas.create');
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
