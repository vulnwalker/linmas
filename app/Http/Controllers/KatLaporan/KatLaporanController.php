<?php

namespace App\Http\Controllers\KatLaporan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\KatLaporan;

class KatLaporanController extends Controller
{
    public function index(Request $request){
        $slcKatLaporan = DB::table("kategori_laporan")
                 ->select("id","nama")
                 ->get();
        return view('katLaporan.katLaporan.index', compact("slcKatLaporan"));
    }

    public function insKatLaporan(Request $request){

        $nama = $request->nama;
        $err  = "";

        $slcKatLaporan = DB::selectOne(" SELECT * from kategori_laporan where nama = '".$nama."' ");
        if (!empty($slcKatLaporan)) {
            $err = "Kategori Laporan Sudah Ada";
        }else{
            $ins = DB::table("kategori_laporan")->insert([
                'nama' => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editKatLaporan(Request $request){
        $nama           = $request->nama;
        $id             = $request->id;
        $err            = "";
        $cek            = "";

        // $slcJnsSapras = DB::selectOne(" SELECT * from jns_sapras where nama = '".$nama."' ");
        // if (!empty($slcJnsSapras)) {
        //     $err = "Nama Sapras Sudah Ada";
        // }else{
            $edit = DB::table('kategori_laporan')
            ->where('id', $id)
            ->update([
                'nama' => $nama,
            ]);
        // }

        // $cek = " SELECT * from wilayah where nama = '".$nama."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcKatLaporan(Request $request){
        $nama = $request->nama;

        $tables = DB::table("kategori_laporan")
                    ->where("nama", "like", "%$nama%")
                    ->select("id","nama")
                    ->get();

        return json_encode($tables);
    }

    public function delKatLaporan(Request $request){
        $id     = $request->id;
        $err    = "";
        $cek    = "";

        $delKatLaporan = DB::table('kategori_laporan')->whereIn('id', $id)->delete();

        // $cek = " SELECT * from jns_sapras where id = '".$id."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function create(Request $request){
        return view("katLaporan.katLaporan.create");
    }

    public function edit($id){
        $katLaporan   = KatLaporan::findOrFail($id);
        return view('katLaporan.katLaporan.edit', compact('katLaporan','id'));
    }
}
