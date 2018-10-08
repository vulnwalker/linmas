<?php

namespace App\Http\Controllers\Wilayah;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Http\Request;
use DB;
use App\Wilayah;

class WilayahController extends Controller
{
    public function index(Request $request){
        $slcWilayah = DB::table("wilayah")
                ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                ->get();

        $slcKdKec = DB::table("wilayah")
                ->where("kd_kel_des", 00)
                ->select("kd_kec","nama")
                ->orderBy('nama', 'asc')
                ->get();
        return view('wilayah.wilayah.index', compact("slcWilayah", "slcKdKec"));
        // return view('wilayah.wilayah.index', compact("slcWilayah"));
    }

    public function insWilayah(Request $request){

        $kd_prov        = $request->kd_prov;
        $kd_kota_kab    = $request->kd_kota_kab;
        $kd_kec         = $request->kd_kec;
        $kd_kel_des     = $request->kd_kel_des;
        $nama           = $request->nama;
        $err            = "";

        $slcWilayah = DB::selectOne(" SELECT * from wilayah where nama = '".$nama."' and kd_kel_des = '".$kd_kel_des."' ");
        if (!empty($slcWilayah)) {
            $err = "Oops Something Wrongs";
        }else{
            $ins = DB::table("wilayah")->insert([
                'kd_prov'       => $kd_prov,
                'kd_kota_kab'   => $kd_kota_kab,
                'kd_kec'        => $kd_kec,
                'kd_kel_des'    => $kd_kel_des,
                'nama'          => $nama
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editWilayah(Request $request){

        $kd_prov        = $request->kd_prov;
        $kd_kota_kab    = $request->kd_kota_kab;
        $kd_kec         = $request->kd_kec;
        $kd_kel_des     = $request->kd_kel_des;
        $nama           = $request->nama;
        $id             = $request->id;
        $err            = "";
        $cek            = "";

        $slcWilayah = DB::selectOne(" SELECT * from wilayah where nama = '".$nama."' and kd_kel_des = '".$kd_kel_des."' ");
        if (!empty($slcWilayah)) {
            $err = "Oops Something Wrongs";
        }else{
            $edit = DB::table('wilayah')
            ->where('id', $id)
            ->update([
                'nama'          => $nama,
                'kd_kec'        => $kd_kec,
                'kd_kel_des'    => $kd_kel_des
            ]);
        }

        $cek = " SELECT * from wilayah where nama = '".$nama."' and kd_kel_des = '".$kd_kel_des."' ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }

    public function srcWilayah(Request $request){
        $kd_kec = $request->kd_kec;
        $kel_des = $request->kel_des;

        $table = DB::table("wilayah");
        if (!empty($kd_kec))     $table->where("kd_kec",$kd_kec);
        if (!empty($kel_des))    $table->where("kd_kel_des",$kel_des);
        if ($kel_des == 0)    $table->where("kd_kel_des", "!=", 00);
        
        $result = $table
                ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                ->orderBy('nama', 'asc')
                ->get();
        return json_encode($result);
    }

    public function srcKelDes($kd_kec){
      $option = DB::table("wilayah")
                  ->where("kd_kec",$kd_kec)
                  ->where("kd_kel_des", "!=", 00)
                  ->orderBy('nama', 'asc')
                  ->pluck("kd_kel_des","nama");
      return json_encode($option);
    }

    public function delWilayah(Request $request){
        $id = $request->id;
        $err    = "";
        $cek    = "";

        $slcWilayah = DB::table("wilayah")
                    ->where("id", $id)
                    ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                    ->get();
        if ($slcWilayah[0]->kd_kel_des == 00) {
            $slcKelDes = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$slcWilayah[0]->kd_kec."' and kd_kel_des != 00 ");
            if (!empty($slcKelDes)) {
                $err = "Kecamatan Tidak Bisa Di Hapus";
            }else{
                $delWilayah = DB::table('wilayah')->whereIn('id', $id)->delete();
            }
        }else{
            $delWilayah = DB::table('wilayah')->whereIn('id', $id)->delete();
        }

        $cek = " SELECT * from wilayah where kd_kec = '".$slcWilayah[0]->kd_kec."' and kd_kel_des != 00 ";
        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
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
       
        return view("wilayah.wilayah.create");
    }

    public function edit($id){
        $wilayah   = Wilayah::findOrFail($id);
        return view('wilayah.wilayah.edit', compact('wilayah','id'));
    }
}
