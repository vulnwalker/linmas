<?php

namespace App\Http\Controllers\Kecamatan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $paging = $request->get('paging');
        $alamat = $request->get('alamat');
        $kecamatan = $request->get('kecamatan');
        $telp = $request->get('telp');
        $fax = $request->get('fax');
        $nama_camat= $request->get('nama_camat');
        $nip = $request->get('nip');


        if (!empty($paging)) {
          $perPage = $paging;
        }else{
          $perPage = 25;
        }

        if (!empty($alamat) || !empty($kecamatan) ||!empty($telp) ||!empty($fax) ||!empty($nama_camat) ||!empty($nip)) {
            $query = Kecamatan::select('kecamatans.*');
              if (!empty($alamat)) $query->where("alamat", 'like', "%$alamat%");
              if (!empty($kecamatan)) $query->where("kecamatan", 'like', "%$kecamatan%");
              if (!empty($telp)) $query->where("telp", 'like', "%$telp%");
              if (!empty($fax)) $query->where("fax", 'like', "%$fax%");
              if (!empty($nama_camat)) $query->where("nama_camat", 'like', "%$nama_camat%");
              if (!empty($nip)) $query->where("nip", 'like', "%$nip%");

            $kecamatan = $query->latest()->paginate($perPage);
        } else {
            $kecamatan = Kecamatan::latest()->paginate($perPage);
        }

        return view('kecamatan.kecamatan.index', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kecamatan.kecamatan.create');
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

        return redirect('kecamatan/kecamatan')->with('flash_message', 'Kecamatan added!');
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

        return view('kecamatan.kecamatan.show', compact('kecamatan'));
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

        return view('kecamatan.kecamatan.edit', compact('kecamatan'));
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

        return redirect('kecamatan/kecamatan')->with('flash_message', 'Kecamatan updated!');
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

        return redirect('kecamatan/kecamatan')->with('flash_message', 'Kecamatan deleted!');
    }
}
