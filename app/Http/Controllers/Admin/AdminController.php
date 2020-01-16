<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(){
    	$now = date("Y-m-d H:i:s");
    	$slcUserLogin = DB::table("users_login")
    					->where("status_login", 1)
            ->select("id","login","logout","refid_user","nama","nm_kec","nm_kel_des")
            ->get();
        $slcUploads = DB::table("uploads")
                    ->where("status", 1)
                    ->select("id","filename")
                    ->get();
        return view('admin.metro', compact("slcUserLogin", "slcUploads"));
    }
}
