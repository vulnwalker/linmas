<?php

namespace App\Http\Controllers\Pelaporan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pelaporan;
use App\Wilayah;
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

        $slcKdKec = DB::table("wilayah")
                ->where("kd_kel_des", 00)
                ->select("kd_kec","nama")
                ->orderBy('nama', 'asc')
                ->get();

        return view('pelaporan.pelaporans.index', compact('Pelaporan', 'slcKdKec'));
    }

    public function srcKelDes($kd_kec){
      $option = DB::table("wilayah")
                  ->where("kd_kec",$kd_kec)
                  ->where("kd_kel_des", "!=", 00)
                  ->orderBy('nama', 'asc')
                  ->pluck("kd_kel_des","nama");
      return json_encode($option);
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

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');

        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        return view('pelaporan.pelaporans.create', compact('slcLaporan', 'Kecamatan', 'kelurahan'));
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
        $contentpublikasi = Pelaporan::findOrFail($id);

        $Kecamatan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('','0');

        $kelurahan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$contentpublikasi->kd_kec)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('-- Semua Kelurahan/ Desa --','0');
        return view('pelaporan.pelaporans.edit', compact('pelaporan','slcLaporan', 'Kecamatan', 'kelurahan'));
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
        $nama       = $request->nama;
        $judul      = $request->judul;
        $user       = $request->user;
        $kd_kec     = $request->kd_kec;
        $kel_des    = $request->kel_des;

        $table = DB::table("pelaporans");
        if (!empty($judul))  $table->where("judul", "like", "%$judul%");
        if (!empty($user))  $table->where("username", "like", "%$user%");
        if (!empty($kd_kec))  $table->where("kd_kec", "like", "%$kd_kec%");
        if (!empty($kel_des))  $table->where("kel_des", "like", "%$kel_des%");
        
        $result = $table->select('pelaporans.*')->get();
        return json_encode($result);
    }
}
