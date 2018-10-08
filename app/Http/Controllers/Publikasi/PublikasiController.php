<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Publikasi;

class PublikasiController extends Controller
{
    public function index(Request $request){
        $slcPublikasi = DB::table("jnsPublikasi")
                 ->select("id","nama")
                 ->get();
        return view('publikasi.publikasi.index', compact("slcPublikasi"));
    }

    public function insPublikasi(Request $request){

        $nama = $request->nama;
        $err  = "";

        $slcPublikasi = DB::selectOne(" SELECT * from jnsPublikasi where nama = '".$nama."' ");
        if (!empty($slcPublikasi)) {
            $err = "Kategori Publikasi Sudah Ada";
        }else{
            $ins = DB::table("jnsPublikasi")->insert([
                'nama' => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editPublikasi(Request $request){
        $nama           = $request->nama;
        $id             = $request->id;
        $err            = "";
        $cek            = "";

        // $slcJnsSapras = DB::selectOne(" SELECT * from jns_sapras where nama = '".$nama."' ");
        // if (!empty($slcJnsSapras)) {
        //     $err = "Nama Sapras Sudah Ada";
        // }else{
            $edit = DB::table('jnsPublikasi')
            ->where('id', $id)
            ->update([
                'nama' => $nama,
            ]);
        // }

        // $cek = " SELECT * from wilayah where nama = '".$nama."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcPublikasi(Request $request){
        $nama = $request->nama;

        $tables = DB::table("jnsPublikasi")
                    ->where("nama", "like", "%$nama%")
                    ->select("id","nama")
                    ->get();

        return json_encode($tables);
    }

    public function delPublikasi(Request $request){
        $id     = $request->id;
        $err    = "";
        $cek    = "";

        $delPublikasi = DB::table('jnsPublikasi')->whereIn('id', $id)->delete();

        // $cek = " SELECT * from jns_sapras where id = '".$id."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function create(Request $request){
        return view("publikasi.publikasi.create");
    }

    public function edit($id){
        $publikasi   = Publikasi::findOrFail($id);
        return view('publikasi.publikasi.edit', compact('publikasi','id'));
    }
}
