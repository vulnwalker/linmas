<?php

namespace App\Http\Controllers\UsersLogin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\UsersLogin;

class UsersLoginController extends Controller
{
    public function index(Request $request){
        $slcUsersLogin = DB::table("users_login")
                ->select("id","refid_user","nama","nm_kec","nm_kel_des","login","logout","status_login")
                ->where("status_login", 1)
                ->orderBy("login", "asc")
                ->get();
        $slcKdKec = DB::table("wilayah")
                ->where("kd_kel_des", 00)
                ->select("kd_kec","nama")
                ->orderBy('nama', 'asc')
                ->get();
        return view('usersLogin.usersLogin.index', compact("slcUsersLogin","slcKdKec"));
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

    public function srcUsersLogin(Request $request){
        $kd_kec = $request->kd_kec;
        $kel_des = $request->kel_des;
        $datepicker = date("Y-m-d H:i:s", strtotime($request->datepicker));
        $strRe = str_replace("/", "-", $datepicker);
        $to = date("Y-m-d H:i:s");

        $table = DB::table("users_login");
        if (!empty($kd_kec))     $table->where("kd_kec",$kd_kec);
        if (!empty($kel_des))    $table->where("kel_des",$kel_des);
        if (!empty($datepicker))      $table->whereBetween("login", array($datepicker, $to));
        // if ($kel_des == 0)       $table->where("kel_des", "!=", 00);
        
        $result = $table
                ->select("id","refid_user","nama","nm_kec","nm_kel_des","login","logout","status_login")
                ->orderBy("login", "asc")
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
