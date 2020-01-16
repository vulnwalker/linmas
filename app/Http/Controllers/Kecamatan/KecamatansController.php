<?php

namespace App\Http\Controllers\Kecamatan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kecamatan;
use Illuminate\Http\Request;

class KecamatansController extends Controller
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
            $kecamatans = Kecamatan::where('kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('telp', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('nama_camat', 'LIKE', "%$keyword%")
                ->orWhere('nip_camat', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kecamatans = Kecamatan::latest()->paginate($perPage);
        }

        return view('kecamatan.kecamatans.index', compact('kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kecamatan.kecamatans.create');
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
			'kecamatan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'nama_camat' => 'required',
			'nip_camat' => 'required'
		]);
        $requestData = $request->all();
        
        Kecamatan::create($requestData);

        return redirect('kecamatan/kecamatans')->with('flash_message', 'Kecamatan added!');
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
        $kecamatan = Kecamatan::findOrFail($id);

        return view('kecamatan.kecamatans.show', compact('kecamatan'));
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
        $kecamatan = Kecamatan::findOrFail($id);

        return view('kecamatan.kecamatans.edit', compact('kecamatan'));
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
			'kecamatan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'nama_camat' => 'required',
			'nip_camat' => 'required'
		]);
        $requestData = $request->all();
        
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->update($requestData);

        return redirect('kecamatan/kecamatans')->with('flash_message', 'Kecamatan updated!');
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
        Kecamatan::destroy($id);

        return redirect('kecamatan/kecamatans')->with('flash_message', 'Kecamatan deleted!');
    }
}
