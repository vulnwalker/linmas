<?php

namespace App\Http\Controllers\Kelurahan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
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
        ;
        if (!empty($keyword)) {
            $kelurahan = Kelurahan::where('id_kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('kelurahan', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('telp', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kelurahan = Kelurahan::latest()->paginate($perPage);
            $kecamatan = Kecamatan::select('kelurahans.*', 'kecamatans.kecamatan')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->get();
        }

        return view('kelurahan.kelurahan.index', compact('kelurahan','kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kelurahan.kelurahan.create');
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
