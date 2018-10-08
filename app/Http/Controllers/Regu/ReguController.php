<?php

namespace App\Http\Controllers\Regu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Regu;

class ReguController extends Controller
{
    public function index(Request $request){
      $slcRegu = DB::table("regu")
                    ->select("id","nama")
                    ->get();
      return view('regu.regu.index', compact("slcRegu"));
    }

    public function insRegu(Request $request){
        $nama   = $request->nama;
        $err    = "";

        $slcWilayah = DB::selectOne(" SELECT * from regu where nama = '".$nama."' ");
        if (!empty($slcWilayah)) {
            $err = "Nama Regu Sudah Ada";
        }else{
            $ins = DB::table("regu")->insert([
                'nama'  => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editRegu(Request $request){
        $nama   = $request->nama;
        $id     = $request->id;
        $err    = "";
        $cek    = "";

        // $slcWilayah = DB::selectOne(" SELECT * from wilayah where nama = '".$nama."' and kd_kel_des = '".$kd_kel_des."' ");
        // if (!empty($slcWilayah)) {
        //     $err = "Oops Something Wrongs";
        // }else{
            $edit = DB::table('regu')
            ->where('id', $id)
            ->update([
                'nama'  => $nama
            ]);
        // }

        // $cek = " SELECT * from wilayah where nama = '".$nama."' and kd_kel_des = '".$kd_kel_des."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcRegu(Request $request){
        $nama = $request->nama;

        $tables = DB::table("regu")
                    ->where("nama", "like", "%$nama%")
                    ->select("id","nama")
                    ->get();

        return json_encode($tables);
    }

    public function delRegu(Request $request){
        $id = $request->id;
        $delRegu = DB::table('regu')->whereIn('id', $id)->delete();
        return json_encode($delRegu);
    }

    public function create(Request $request){
       
        return view("regu.regu.create");
    }

    public function edit($id){
        $regu   = Regu::findOrFail($id);
        return view('regu.regu.edit', compact('regu','id'));
    }
}
