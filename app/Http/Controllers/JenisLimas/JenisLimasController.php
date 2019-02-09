<?php

namespace App\Http\Controllers\JenisLimas;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JenisLima;
use Illuminate\Http\Request;

class JenisLimasController extends Controller
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
            $jenislimas = JenisLima::where('uraian', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $jenislimas = JenisLima::latest()->paginate($perPage);
        }

        return view('jenisLimas.jenis-limas.index', compact('jenislimas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenisLimas.jenis-limas.create');
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
			'uraian' => 'required'
		]);
        $requestData = $request->all();
        
        JenisLima::create($requestData);

        return redirect('jenisLimas/jenis-limas')->with('flash_message', 'JenisLima added!');
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
        $jenislima = JenisLima::findOrFail($id);

        return view('jenisLimas.jenis-limas.show', compact('jenislima'));
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
        $jenislima = JenisLima::findOrFail($id);

        return view('jenisLimas.jenis-limas.edit', compact('jenislima'));
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
			'uraian' => 'required'
		]);
        $requestData = $request->all();
        
        $jenislima = JenisLima::findOrFail($id);
        $jenislima->update($requestData);

        return redirect('jenisLimas/jenis-limas')->with('flash_message', 'JenisLima updated!');
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
        JenisLima::destroy($id);

        return redirect('jenisLimas/jenis-limas')->with('flash_message', 'JenisLima deleted!');
    }
}
