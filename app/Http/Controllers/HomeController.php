<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
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
