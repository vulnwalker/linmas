<?php

namespace App\Http\Controllers\Adminis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Http\Request;
use DB;
use App\Wilayah;
use App\Role;

class AdminisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        $slcKd_kec = DB::table("wilayah")
                 ->where('kd_kel_des', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->get();
        $slcKd_kel = DB::table("wilayah")
                 ->where('kd_kel_des', '!=', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->get();
        return view('adminis.adminis.index', compact("slcKd_kec", "slcKd_kel"));
    }

    public function insAdminis(Request $request){

        $username       = $request->username;
        $hak_akses      = $request->hak_akses;
        $password       = bcrypt($request->password);
        $kd_kec         = $request->kd_kec;
        $kd_kel         = $request->kd_kel;
        $jns_sapras     = $request->jns_sapras;
        $regu_anggota   = $request->regu_anggota;

        $slcEmail = DB::selectOne(" SELECT * from users where email = '".$username."' ");
        if (!empty($slcEmail)) {
            $ins = "Oops Something Wrongs";
        }else{
            $ins = DB::table("users")->insert([
                'name'          => $username,
                'email'         => $username,
                'password'      => $password,
                'kd_kec'        => $kd_kec,
                'kd_kel_des'    => $kd_kel,
                'jns_sapras'    => $jns_sapras,
                'regu_anggota'  => $regu_anggota
            ]);

            $slcID = DB::selectOne(" SELECT * from users order by id desc ");

            $insRole = DB::table("role_user")->insert([
                'role_id'   => $hak_akses,
                'user_id'   => $slcID->id
            ]);
        }

        return json_encode($ins);
    }

    public function srcWilayah(Request $request){
        $kec_kel = $request->kec_kel;

        $tables = DB::table("wilayah")
                    ->where("nama", "like", "%$kec_kel%")
                    ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                    ->get();

        return json_encode($tables);
    }

    public function srcKd_kelDes($kd_kec){
      $option = DB::table("wilayah")
                  ->where("kd_kec",$kd_kec)
                  ->where("kd_kel_des", "!=", 00)
                  ->pluck("kd_kel_des","nama");
      return json_encode($option);
    }

    public function upWilayah(Request $request){
        $id = $request->id;
        $upWilayah = DB::table("wilayah")
                 ->where('id', '=', $id)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->get();
        // $kd_kec = $upWilayah->kd_kec;
        return view("wilayah.wilayah.edit", compact("upWilayah", "id"));
    }

    public function delWilayah(Request $request){
        $id = $request->id;
        // for ($c=0; $c <$id.length; $c++) {
            
        // }
        $delWilayah = DB::table('wilayah')->whereIn('id', $id)->delete();
        return json_encode($delWilayah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request){
       $slcKd_kec = DB::table("wilayah")
                 ->where('kd_kel_des', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->get();
        $slcKd_kel = DB::table("wilayah")
                 ->where('kd_kel_des', '!=', 00)
                 ->select("id","kd_prov","kd_kota_kab","kd_kec","kd_kel_des","nama")
                 ->get();
        return view("adminis.adminis.create", compact("slcKd_kec", "slcKd_kel"));
    }

    public function myform()
    {

        $Kecamatan = Kecamatan::pluck('kecamatan', 'id');
        $Kecamatan->prepend('','');

        return view('kelurahan.kelurahan.create',compact('Kecamatan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'id_kecamatan' => 'required',
			'kelurahan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'email' => 'required'
		]);
        $requestData = $request->all();

        Kelurahan::create($requestData);

        return redirect('kelurahan/kelurahan')->with('flash_message', 'Kelurahan added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        return view('kelurahan.kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // $wilayah = Wilayah::findOrFail($id);
        $wilayah = \App\Wilayah::find($id);
        return view('wilayah.wilayah.edit', compact('wilayah','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'id_kecamatan' => 'required',
			'kelurahan' => 'required',
			'alamat' => 'required',
			'telp' => 'required',
			'email' => 'required'
		]);
        $requestData = $request->all();

        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->update($requestData);

        return redirect('kelurahan/kelurahan')->with('flash_message', 'Kelurahan updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Wilayah::where('id', '=', $id)->forceDelete();

        return redirect('wilayah/wilayah')->with('flash_message', 'Wilayah deleted!');
    }
}
