<?php

namespace App\Http\Controllers\Images;

use App\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use DB;

class ImagesController extends Controller
{
    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('assets/images/upload');
    }

    /**
     * Display all of the images.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Images::all();
        $slcImages = DB::table("uploads")
                 ->select("id","filename","resized_name","original_name","user","status","created_at","updated_at")
                 ->latest()
                 ->get();
        return view('images.images.index', compact('photos','slcImages'));
    }

    /**
     * Show the form for creating uploading new images.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = "";
        return view('images.images.create', compact("status"));
    }

    public function edit($id){
        $images   = Images::findOrFail($id);
        $status = $images->status;
        return view('images.images.edit', compact('images','id','status'));
    }

    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $limas = new \App\Linma;
        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();

            Image::make($photo)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path . '/' . $resize_name);

            $photo->move($this->photos_path, $save_name);

            // $upload = new Images();
            $upload = new \App\Images;
            $upload->filename = $save_name;
            $upload->resized_name = $resize_name;
            $upload->original_name = basename($photo->getClientOriginalName());
            $upload->user = $request->input('user');
            $upload->status = $request->input('status');
            $upload->save();
        }
        return Response::json([
            'message' => 'Image saved Successfully '
        ], 200);
    }

    /**
     * Remove the images from the storage.
     *
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $filename = $request->id;
        $uploaded_image = Images::where('original_name', basename($filename))->first();

        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        if (file_exists($resized_file)) {
            unlink($resized_file);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response::json(['message' => 'File successfully delete unlink('.$file_path.')'], 200);
    }

    public function srcImages(Request $request){
        $user   = $request->user;
        $status      = $request->status;
        $table = DB::table("uploads");

        if (!empty($user))      $table->where("user", "like", "%$user%");
        if (!empty($status))    $table->where("status",$status);
        
        $result = $table->select("id","filename","resized_name","original_name","user","status","created_at","updated_at")->latest()->get();
        return json_encode($result);
    }

    public function delImages(Request $request){
        $id = $request->id;
        $err = "";
        $content = "";
        $cek = "";

        $delImages = DB::table('uploads')->whereIn('id', $id)->delete();
        $content = "Successfully";

        $arrayRespond = array('cek' => $cek, 'content' => $content, 'err' => $err );
        return json_encode($arrayRespond);
    }

    public function editImages(Request $request){

        $status     = $request->status;
        $user       = $request->user;
        $id         = $request->id;
        $update     = date("Y-m-d H:i:s");
        $err        = "";
        $cek        = "";

        $edit = DB::table('uploads')
        ->where('id', $id)
        ->update([
            'status'    => $status,
            'user'      => $user,
            'updated_at'=> $update
        ]);

        $arrayRespond = array('err' => $err, 'cek' => $cek );
        return json_encode($arrayRespond);
    }
}
