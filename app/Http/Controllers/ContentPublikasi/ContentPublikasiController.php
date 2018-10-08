<?php

namespace App\Http\Controllers\ContentPublikasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ContentPublikasi;
use App\Wilayah;
use Illuminate\Http\Request;
use DB;
use PDF;
use Spipu\Html2Pdf\Html2Pdf;

class ContentPublikasiController extends Controller
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
            $contentpublikasi = ContentPublikasi::where('id_publikasi', 'LIKE', "%$keyword%")
                ->orWhere('judul', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $contentpublikasi = ContentPublikasi::select('content_publikasis.*', 'jnsPublikasi.nama')
            ->join('jnsPublikasi', 'jnsPublikasi.id' , '=','content_publikasis.id_publikasi')
            ->latest()->paginate($perPage);
        }

        $slcKdKec = DB::table("wilayah")
                ->where("kd_kel_des", 00)
                ->select("kd_kec","nama")
                ->orderBy('nama', 'asc')
                ->get();

        return view('ContentPublikasi.content-publikasi.index', compact('contentpublikasi', 'slcKdKec'));
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
        $slcPublikasi = DB::table("jnsPublikasi")
                 ->pluck("nama","id");
        $slcPublikasi->prepend('-- SELECT --','');

        $Kecamatan = Wilayah::where('kd_kel_des','00')->orderBy('nama', 'asc')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('-- Semua Kecamatan --','0');

        $kelurahan = array('0' => '-- Semua Kelurahan/ Desa --');
        
        return view('ContentPublikasi.content-publikasi.create', compact('slcPublikasi','Kecamatan','kelurahan'));
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
        ContentPublikasi::create($requestData);

        return redirect('ContentPublikasi/content-publikasi')->with('flash_message', 'ContentPublikasi added!');
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
        $contentpublikasi = ContentPublikasi::findOrFail($id);

        return view('ContentPublikasi.content-publikasi.show', compact('contentpublikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id){
        $slcPublikasi = DB::table("jnsPublikasi")
                 ->pluck("nama","id");
        $slcPublikasi->prepend('-- SELECT --','');
        $contentpublikasi = ContentPublikasi::findOrFail($id);


        $Kecamatan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kel_des','00')->pluck('nama', 'kd_kec');
        $Kecamatan->prepend('','0');

        $kelurahan = Wilayah::all()->sortBy('nama', SORT_NATURAL | SORT_FLAG_CASE)->where('kd_kec',$contentpublikasi->kd_kec)->where('kd_kec','!=','0')->where('kd_kel_des','!=','0')->pluck('nama', 'kd_kel_des');
        $kelurahan->prepend('-- Semua Kelurahan/ Desa --','0');

        return view('ContentPublikasi.content-publikasi.edit', compact('contentpublikasi', 'slcPublikasi','Kecamatan','kelurahan'));
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
        
        $contentpublikasi = ContentPublikasi::findOrFail($id);
        $contentpublikasi->update($requestData);

        return redirect('ContentPublikasi/content-publikasi')->with('flash_message', 'ContentPublikasi updated!');
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
        ContentPublikasi::destroy($id);

        return redirect('ContentPublikasi/content-publikasi')->with('flash_message', 'ContentPublikasi deleted!');
    }
    public function DeletePublik(Request $request)
    {
        $ids = $request->ids;

        ContentPublikasi::whereIn('id',explode(",",$ids))->forceDelete();
    }
    public function PDF($id){
        $contentpublikasi = ContentPublikasi::findOrFail($id);

        $data = ['name'=>'Hasagi'];

        $pdf = PDF::loadView('admin.dashboard', compact('data','contentpublikasi'));
        return $pdf->setPaper('a4')->download("$contentpublikasi->judul.pdf");
    }

    public function srcContent(Request $request){
        $nama       = $request->nama;
        $judul      = $request->judul;
        $user       = $request->user;
        $kd_kec     = $request->kd_kec;
        $kel_des    = $request->kel_des;

        $table = DB::table("content_publikasis");
        if (!empty($judul))  $table->where("judul", "like", "%$judul%");
        if (!empty($user))  $table->where("username", "like", "%$user%");
        if (!empty($kd_kec))  $table->where("kd_kec", "like", "%$kd_kec%");
        if (!empty($kel_des))  $table->where("kel_des", "like", "%$kel_des%");
        
        $result = $table
                ->select('content_publikasis.*', 'jnsPublikasi.nama')
                ->join('jnsPublikasi', 'jnsPublikasi.id' , '=','content_publikasis.id_publikasi')
                ->get();
        return json_encode($result);
    }
}
