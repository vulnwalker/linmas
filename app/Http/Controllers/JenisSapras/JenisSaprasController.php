<?php

namespace App\Http\Controllers\JenisSapras;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\JenisSapras;

class JenisSaprasController extends Controller
{
    public function index(Request $request){
        $slcJnsSapras = DB::table("jns_sapras")
                 ->select("id","nama","status")
                 ->get();
        return view('jenisSapras.jenisSapras.index', compact("slcJnsSapras"));
    }

    public function insJnsSapras(Request $request){

        $nama = $request->nama;
        $err  = "";

        $slcJnsSapras = DB::selectOne(" SELECT * from jns_sapras where nama = '".$nama."' ");
        if (!empty($slcJnsSapras)) {
            $err = "Oops Something Wrongs";
        }else{
            $ins = DB::table("jns_sapras")->insert([
                'nama' => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editJnsSapras(Request $request){
        $nama           = $request->nama;
        $id             = $request->id;
        $err            = "";
        $cek            = "";

        // $slcJnsSapras = DB::selectOne(" SELECT * from jns_sapras where nama = '".$nama."' ");
        // if (!empty($slcJnsSapras)) {
        //     $err = "Nama Sapras Sudah Ada";
        // }else{
            $edit = DB::table('jns_sapras')
            ->where('id', $id)
            ->update([
                'nama' => $nama,
            ]);
        // }

        // $cek = " SELECT * from wilayah where nama = '".$nama."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcJnsSapras(Request $request){
        $nama = $request->nama;
        $status = $request->status;

        $tables = DB::table("jns_sapras");
        if (!empty($nama))  $tables->where("nama", "like", "%$nama%");
        if (!empty($status)) $tables->where("status",$status);
        
        $result = $tables->select("id","nama","status")->get();
        return json_encode($result);
    }

    public function delJnsSapras(Request $request){
        $id     = $request->id;
        $err    = "";
        $cek    = "";

        $slcJnsSapras = DB::table("jns_sapras")
                ->where("id", $id)
                ->select("id","nama","status")
                ->get();
        if ($slcJnsSapras[0]->status == 1) {
            $err = "Barang Sedang Di Pakai";
        }else{
            $delJnsSapras = DB::table('jns_sapras')->whereIn('id', $id)->delete();
        }

        // $cek = " SELECT * from jns_sapras where id = '".$id."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function create(Request $request){
       
        return view("jenisSapras.jenisSapras.create");
    }

    public function edit($id){
        $jenisSapras   = JenisSapras::findOrFail($id);
        return view('jenisSapras.jenisSapras.edit', compact('jenisSapras','id'));
    }
}
