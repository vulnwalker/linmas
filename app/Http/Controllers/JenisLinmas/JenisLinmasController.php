<?php

namespace App\Http\Controllers\JenisLinmas;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JenisLinma;
use Illuminate\Http\Request;
use DB;

class JenisLinmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        $jenislinmas = DB::table("jenis_linmas")
                 ->select("id","uraian")
                 ->get();

        return view('jenisLinmas.jenis-linmas.index', compact('jenislinmas'));
    }

    public function insJnsLinmas(Request $request){

        $jns_linmas     = $request->jns_linmas;
        $ins = DB::table("jenis_linmas")->insert([
            'uraian'    => $jns_linmas
        ]);

        return json_encode($ins);
    }

    public function srcJnsLinmas(Request $request){
        $jns_linmas = $request->jns_linmas;

        $tables = DB::table("jenis_linmas")
                    ->where("uraian", "like", "%$jns_linmas%")
                    ->select("id","uraian")
                    ->get();

        return json_encode($tables);
    }

    public function delJnsLinmas(Request $request){
        $id = $request->id;
        $delJnsLinmas = DB::table('jenis_linmas')->whereIn('id', $id)->delete();
        return json_encode($delJnsLinmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenisLinmas.jenis-linmas.create');
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
        
        $requestData = $request->all();
        
        JenisLinma::create($requestData);

        return redirect('jenisLinmas/jenis-linmas')->with('flash_message', 'JenisLinma added!');
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
        $jenislinma = JenisLinma::findOrFail($id);

        return view('jenisLinmas.jenis-linmas.show', compact('jenislinma'));
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
        $jenislinma = JenisLinma::findOrFail($id);

        return view('jenisLinmas.jenis-linmas.edit', compact('jenislinma'));
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
        
        $requestData = $request->all();
        
        $jenislinma = JenisLinma::findOrFail($id);
        $jenislinma->update($requestData);

        return redirect('jenisLinmas/jenis-linmas')->with('flash_message', 'JenisLinma updated!');
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
        JenisLinma::destroy($id);

        return redirect('jenisLinmas/jenis-linmas')->with('flash_message', 'JenisLinma deleted!');
    }
}
