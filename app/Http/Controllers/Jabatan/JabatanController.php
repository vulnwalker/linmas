<?php

namespace App\Http\Controllers\Jabatan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Jabatan;

class JabatanController extends Controller
{
    public function index(Request $request){
        $slcJabatan = DB::table("jabatan")
                 ->select("id","nama")
                 ->get();
        return view('jabatan.jabatan.index', compact("slcJabatan"));
    }

    public function insJabatan(Request $request){
        $nama   = $request->nama;
        $err    = "";
        $cek    = "";

        $slcJabatan = DB::selectOne(" SELECT * from jabatan where nama = '".$nama."' ");
        if (!empty($slcJabatan)) {
            $err = "Nama Jabatan Sudah Ada";
        }else{
            $ins = DB::table("jabatan")->insert([
                'nama'  => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function editJabatan(Request $request){
        $nama   = $request->nama;
        $id     = $request->id;
        $err    = "";
        $cek    = "";

        // $slcWilayah = DB::selectOne(" SELECT * from jabatan where kd_jabatan = '".$danton."' and nama = '".$nama."' ");
        // if (!empty($slcWilayah)) {
        //     $err = "Oops Something Wrongs";
        // }else{
            $ins = DB::table("jabatan")
            ->where('id', $id)
            ->update([
                'nama'  => $nama
            ]);
        // }

        $cek = " ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcJabatan(Request $request){
        $nama = $request->nama;

        $tables = DB::table("jabatan")
                    ->where("nama", "like", "%$nama%")
                    ->select("id","nama")
                    ->get();

        return json_encode($tables);
    }

    public function delJabatan(Request $request){
        $id = $request->id;
        $delJabatan = DB::table('jabatan')->whereIn('id', $id)->delete();
        return json_encode($delJabatan);
    }

    public function create(Request $request){
        return view("jabatan.jabatan.create");
    }

    public function edit($id){
        $jabatan   = Jabatan::findOrFail($id);
        return view('jabatan.jabatan.edit', compact('jabatan','id'));
    }
}
