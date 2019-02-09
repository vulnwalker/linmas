<?php

namespace App\Http\Controllers\Username;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Username;
use Illuminate\Http\Request;
use DB;
use PDF;

class UsernameController extends Controller{

    public function index(Request $request){
        $slcUsers = DB::table("users")
                 ->select("id","email","level","adminis","user","anggota","pengasahaan","pembinaan","posKamling","sapras","publikasi","pelaporan","status","kd_kec","kel_des","nm_kec","nm_kel_des")
                 ->latest()
                 ->get();
        $slcKdKec = DB::table("wilayah")
                ->where("kd_kel_des", 00)
                ->select("kd_kec","nama")
                ->orderBy('nama', 'asc')
                ->get();
        return view('username.username.index', compact("slcUsers","slcKdKec"));
    }

    public function insUser(Request $request){
        $username       = $request->username;
        $password       = bcrypt($request->password);
        $password2nd    = $request->password;
        $kd_kec         = $request->kd_kec;
        $kel_des        = $request->kel_des;
        $status         = $request->status;
        $level          = $request->level;
        $adminis        = $request->adminis;
        $user           = $request->user;
        $anggota        = $request->anggota;
        $pengasahaan    = $request->pengasahaan;
        $pembinaan      = $request->pembinaan;
        $posKamling     = $request->posKamling;
        $sapras         = $request->sapras;
        $publikasi      = $request->publikasi;
        $pelaporan      = $request->pelaporan;
        $err            = "";

        $slcEmail = DB::selectOne(" SELECT * from users where email = '".$username."' ");
        if (!empty($slcEmail)) {
            $err = "Oops Something Wrongs";
        }elseif ($status == 2) {
            $slcNmKdKec = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = 00 ");
            $slcKelDes  = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = '".$kel_des."' ");

            if (!empty($slcNmKdKec)) {
                $namaKdKec = $slcNmKdKec->nama;
                $kodeKdKec = $kd_kec;
            }else{
                $namaKdKec = "SEMUA";
                $kodeKdKec = "00";
            }

            if (!empty($slcKelDes)) {
                $namaKelDes = $slcKelDes->nama;
                $kodeKelDes = $kel_des;
            }else{
                $namaKelDes = "SEMUA";
                $kodeKelDes = "00";
            }

            $ins = DB::table("users")->insert([
                'name'          => $username,
                'email'         => $username,
                'password'      => $password,
                'password2nd'   => $password2nd,
                'kd_kec'        => $kodeKdKec,
                // 'kd_kec'        => $kd_kec,
                'kel_des'       => $kodeKelDes,
                // 'kel_des'       => $kel_des,
                // 'nm_kec'        => $slcNmKdKec->nama,
                'nm_kec'        => $namaKdKec,
                // 'nm_kel_des'    => $slcKelDes->nama,
                'nm_kel_des'    => $namaKelDes,
                'status'        => $status,
                'level'         => $level,
                'adminis'       => $adminis,
                'user'          => $user,
                'anggota'       => $anggota,
                'pengasahaan'   => $pengasahaan,
                'pembinaan'     => $pembinaan,
                'posKamling'    => $posKamling,
                'sapras'        => $sapras,
                'publikasi'     => $publikasi,
                'pelaporan'     => $pelaporan,
            ]);

            $slcID = DB::selectOne(" SELECT * from users order by id desc ");

            $insRole = DB::table("role_user")->insert([
                'role_id'   => $level,
                'user_id'   => $slcID->id
            ]);
        }else{
            $slcNmKdKec = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = 00 ");
            $slcKelDes  = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = '".$kel_des."' ");

            if (!empty($slcNmKdKec)) {
                $namaKdKec = $slcNmKdKec->nama;
                $kodeKdKec = $kd_kec;
            }else{
                $namaKdKec = "SEMUA";
                $kodeKdKec = "00";
            }

            if (!empty($slcKelDes)) {
                $namaKelDes = $slcKelDes->nama;
                $kodeKelDes = $kel_des;
            }else{
                $namaKelDes = "SEMUA";
                $kodeKelDes = "00";
            }

            $ins = DB::table("users")->insert([
                'name'          => $username,
                'email'         => $username,
                'password'      => $password,
                'password2nd'   => $password2nd,
                'kd_kec'        => $kodeKdKec,
                // 'kd_kec'        => $kd_kec,
                'kel_des'       => $kodeKelDes,
                // 'kel_des'       => $kel_des,
                // 'nm_kec'        => $slcNmKdKec->nama,
                'nm_kec'        => $namaKdKec,
                'nm_kel_des'    => $namaKelDes,
                // 'nm_kel_des'    => $slcKelDes->nama,
                'status'        => $status,
                'level'         => $level,
                'adminis'       => $adminis,
                'user'          => $user,
                'anggota'       => $anggota,
                'pengasahaan'   => $pengasahaan,
                'pembinaan'     => $pembinaan,
                'posKamling'    => $posKamling,
                'sapras'        => $sapras,
                'publikasi'     => $publikasi,
                'pelaporan'     => $pelaporan,
            ]);

            $slcID = DB::selectOne(" SELECT * from users order by id desc ");

            $insRole = DB::table("role_user")->insert([
                'role_id'   => $level,
                'user_id'   => $slcID->id
            ]);
        }

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function editUser(Request $request){
        $username       = $request->username;
        $password       = bcrypt($request->password);
        $password2nd    = $request->password;
        $kd_kec         = $request->kd_kec;
        $kel_des        = $request->kel_des;
        $status         = $request->status;
        $level          = $request->level;
        $adminis        = $request->adminis;
        $user           = $request->user;
        $anggota        = $request->anggota;
        $pengasahaan    = $request->pengasahaan;
        $pembinaan      = $request->pembinaan;
        $posKamling     = $request->posKamling;
        $sapras         = $request->sapras;
        $publikasi      = $request->publikasi;
        $pelaporan      = $request->pelaporan;
        $id             = $request->id;
        $err            = "";

        if ($status == 2) {
            $slcNmKdKec = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = 00 ");
            $slcKelDes  = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = '".$kel_des."' ");

            if (!empty($slcNmKdKec)) {
                $namaKdKec = $slcNmKdKec->nama;
                $kodeKdKec = $kd_kec;
            }else{
                $namaKdKec = "SEMUA";
                $kodeKdKec = "00";
            }

            if (!empty($slcKelDes)) {
                $namaKelDes = $slcKelDes->nama;
                $kodeKelDes = $kel_des;
            }else{
                $namaKelDes = "SEMUA";
                $kodeKelDes = "00";
            }

                $edit = DB::table("users")
                ->where('id', $id)
                ->update([
                    'name'          => $username,
                    'email'         => $username,
                    'password'      => $password,
                    'password2nd'   => $password2nd,
                    'kd_kec'        => $kodeKdKec,
                    // 'kd_kec'        => $kd_kec,
                    'kel_des'       => $kodeKelDes,
                    // 'kel_des'       => $kel_des,
                    'nm_kec'        => $namaKdKec,
                    // 'nm_kec'        => $slcNmKdKec->nama,
                    'nm_kel_des'    => $namaKelDes,
                    // 'nm_kel_des'    => $slcKelDes->nama,
                    'status'        => $status,
                    'level'         => $level,
                    'adminis'       => $adminis,
                    'user'          => $user,
                    'anggota'       => $anggota,
                    'pengasahaan'   => $pengasahaan,
                    'pembinaan'     => $pembinaan,
                    'posKamling'    => $posKamling,
                    'sapras'        => $sapras,
                    'publikasi'     => $publikasi,
                    'pelaporan'     => $pelaporan,
                ]);

                $editRole = DB::table("role_user")
                ->where('user_id', $id)
                ->update([
                    'role_id'   => $level
                ]);
        }else{
            $slcNmKdKec = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = 00 ");
            $slcKelDes  = DB::selectOne(" SELECT * from wilayah where kd_kec = '".$kd_kec."' and kd_kel_des = '".$kel_des."' ");

            if (!empty($slcNmKdKec)) {
                $namaKdKec = $slcNmKdKec->nama;
                $kodeKdKec = $kd_kec;
            }else{
                $namaKdKec = "SEMUA";
                $kodeKdKec = "00";
            }

            if (!empty($slcKelDes)) {
                $namaKelDes = $slcKelDes->nama;
                $kodeKelDes = $kel_des;
            }else{
                $namaKelDes = "SEMUA";
                $kodeKelDes = "00";
            }

                $edit = DB::table("users")
                ->where('id', $id)
                ->update([
                    'name'          => $username,
                    'email'         => $username,
                    'password'      => $password,
                    'password2nd'   => $password2nd,
                    'kd_kec'        => $kodeKdKec,
                    // 'kd_kec'        => $kd_kec,
                    'kel_des'       => $kodeKelDes,
                    // 'kel_des'       => $kel_des,
                    'nm_kec'        => $namaKdKec,
                    // 'nm_kec'        => $slcNmKdKec->nama,
                    // 'nm_kel_des'    => $slcKelDes->nama,
                    'nm_kel_des'    => $namaKelDes,
                    'status'        => $status,
                    'level'         => $level,
                    'adminis'       => $adminis,
                    'user'          => $user,
                    'anggota'       => $anggota,
                    'pengasahaan'   => $pengasahaan,
                    'pembinaan'     => $pembinaan,
                    'posKamling'    => $posKamling,
                    'sapras'        => $sapras,
                    'publikasi'     => $publikasi,
                    'pelaporan'     => $pelaporan,
                ]);

                $editRole = DB::table("role_user")
                ->where('user_id', $id)
                ->update([
                    'role_id'   => $level
                ]);
        }
        

        $arrayRespond = array('err' => $err, );
        return json_encode($arrayRespond);
    }

    public function create(){
        $slcKd_kec = DB::table("wilayah")
                 ->where('kd_kel_des', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->orderBy('nama', 'asc')
                 ->get();
        $slcKd_kel = DB::table("wilayah")
                 ->where('kd_kel_des', '!=', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->orderBy('nama', 'asc')
                 ->get();
        return view('username.username.create', compact("slcKd_kec", "slcKd_kel"));
    }

    public function srcKelDes($kd_kec){
      $option = DB::table("wilayah")
                  ->where("kd_kec",$kd_kec)
                  ->where("kd_kel_des", "!=", 00)
                  ->orderBy('nama', 'asc')
                  ->pluck("kd_kel_des","nama");
      return json_encode($option);
    }

    public function srcUsername(Request $request){
        $username   = $request->username;
        $level      = $request->level;
        $status     = $request->status;
        $kd_kec     = $request->kd_kec;
        $kel_des    = $request->kel_des;
        $table = DB::table("users");

        if (!empty($username))  $table->where("email", "like", "%$username%");
        if (!empty($level))     $table->where("level",$level);
        if (!empty($status))    $table->where("status",$status);
        if (!empty($kd_kec))    $table->where("kd_kec",$kd_kec);
        if (!empty($kel_des))    $table->where("kel_des",$kel_des);
        
        $result = $table->select("id","email","level","adminis","user","anggota","pengasahaan","pembinaan","posKamling","sapras","publikasi","pelaporan","status","nm_kec","nm_kel_des")->latest()->get();
        return json_encode($result);
    }

    public function delUsername(Request $request){
        $id = $request->id;
        $delUsername = DB::table('users')->whereIn('id', $id)->delete();
        return json_encode($delUsername);
    }

    public function edit($id){
        $username   = Username::findOrFail($id);
        $slcKd_kec  = DB::table("wilayah")
                    ->where('kd_kel_des', 00)
                    ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                    ->orderBy('nama', 'asc')
                    ->get();
        $slcKd_kel  = DB::table("wilayah")
                    ->where('kd_kec', $username->kd_kec)
                    ->where('kd_kel_des', '!=', 00)
                    ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                    ->orderBy('nama', 'asc')
                    ->get();
        return view('username.username.edit', compact('username','id','slcKd_kec','slcKd_kel'));
    }
}
