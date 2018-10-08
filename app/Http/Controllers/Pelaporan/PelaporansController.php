<?php

namespace App\Http\Controllers\Pelaporan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pelaporan;
use Illuminate\Http\Request;
use DB;
use PDF;
use Spipu\Html2Pdf\Html2Pdf;

class PelaporansController extends Controller{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $Pelaporan = Pelaporan::where('id_publikasi', 'LIKE', "%$keyword%")
                ->orWhere('judul', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $Pelaporan = Pelaporan::latest()->paginate($perPage);
        }

        return view('pelaporan.pelaporans.index', compact('Pelaporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        $slcLaporan = DB::table("kategori_laporan")
                 ->pluck("nama","id");
        $slcLaporan->prepend('-- SELECT --','');
        return view('pelaporan.pelaporans.create', compact('slcLaporan'));
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
        Pelaporan::create($requestData);

        return redirect('pelaporan/pelaporans')->with('flash_message', 'Pelaporan added!');
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
        $Pelaporan = Pelaporan::findOrFail($id);

        return view('pelaporan.pelaporans.show', compact('Pelaporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id){
        $pelaporan = Pelaporan::findOrFail($id);
        $slcLaporan = DB::table("kategori_laporan")
                 ->pluck("nama","id");
        $slcLaporan->prepend('-- SELECT --','');
        return view('pelaporan.pelaporans.edit', compact('pelaporan','slcLaporan'));
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
        
        $pelaporan = Pelaporan::findOrFail($id);
        $pelaporan->update($requestData);

        return redirect('pelaporan/pelaporans')->with('flash_message', 'Pelaporan updated!');
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
        Pelaporan::destroy($id);

        return redirect('pelaporan/pelaporans')->with('flash_message', 'Pelaporan deleted!');
    }
    public function DeletePelaporan(Request $request)
    {
        $ids = $request->ids;

        Pelaporan::whereIn('id',explode(",",$ids))->forceDelete();
    }
    public function PDF($id){
        $Pelaporan = Pelaporan::findOrFail($id);

        // $html2pdf = new Html2Pdf();
        // $html2pdf->setDefaultFont("linuxlibertinecapitalsbi");
        // $html2pdf->writeHTML($Pelaporan->deskripsi);
        // $html2pdf->output();

        // $pdf = PDF::setOptions(['defaultPaperSize' => 'a4']);
        $pdf = PDF::loadView('admin.pelaporanPdf', compact('Pelaporan'));
        return $pdf->setPaper('a4')->download("$Pelaporan->judul.pdf");
    }

    public function srcContent(Request $request){
        $nama   = $request->nama;
        $judul  = $request->judul;
        $user   = $request->user;

        $table = DB::table("pelaporans");
        if (!empty($judul))  $table->where("judul", "like", "%$judul%");
        if (!empty($user))  $table->where("username", "like", "%$user%");
        
        $result = $table->select('pelaporans.*')->get();
        return json_encode($result);
    }
}
