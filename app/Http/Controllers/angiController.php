<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Validator;
use Schema;
use Image;
use Response;
use Carbon\Carbon;
use App\Angi;
use App\AngiImageUrl;
use DB;
use File;
use App\ImageUpload;
// use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class angiController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function angiGetJson()
  {
    try{
      $angi = DB::table("a_angi")
          ->join("a_comandlal", "a_angi.komandlal", "=", "a_comandlal.id")
          ->select("a_angi.*", "a_comandlal.comandlalName")
          ->get();
      return DataTables::of($angi)
          ->make(true);
    }catch(\Exception $e){
      return "Серверийн алдаа!!! Веб мастерт хандана уу";
    }
  }

  public function angiShow()
  {
    $angis = DB::table("a_angi")->orderBy("idangi")->get();
    $komandlals = DB::table("a_comandlal")->get();
    return  view("angi.AngiShow", compact("angis", "komandlals"));
  }

  public function store(Request $req){
    try{
      $angiAdd = new Angi;
      $angiAdd->idangi = $req->angiCodeID;
      $angiAdd->komandlal = $req->komandlal;
      $angiAdd->ner = $req->angi;
      $angiAdd->angiAddress = $req->address;
      $angiAdd->save();
      return "Амжилттай хадгаллаа";
    }catch(\Exception $e){
      return "Серверийн алдаа!!! Веб мастерт хандана уу";
    }
  }

  public function update(Request $req){
    try{
      $angiAdd = Angi::find($req->ID);
      $angiAdd->komandlal = $req->komandlal;
      $angiAdd->idangi = $req->angiCodeID;
      $angiAdd->ner = $req->angi;
      $angiAdd->angiAddress = $req->address;
      $angiAdd->save();
      return "Амжилттай заслаа";
    }catch(\Exception $e){
      return "Серверийн алдаа!!! Веб мастерт хандана уу";
    }
  }

  public function angiIDdelete(Request $req){
    try{
      $selectAngi = DB::table("a_angi")
          ->where("id", "=", $req->id)
          ->first();
      $pathUrl = "angiImage/".$selectAngi->id."-".$selectAngi->idangi;

      $deleteAngiImage = ImageUpload::where("angiID", "=", $req->id)->delete();

        $images = File::allFiles(public_path($pathUrl));
        foreach($images as $image){
          $path = public_path() . '/'.$pathUrl.'/' . $image->getFilename();
          if (file_exists($path)) {
              unlink($path);
          }
        }

      $angiDelete = Angi::where("id", "=", $req->id)->delete();

      return "Амжилттай Устлаа";
    }catch(\Exception $e){
      return "Серверийн алдаа!!! Веб мастерт хандана уу";
    }
  }



  public function setImagePath(Request $req)
  {
      $newPath = "angiImage/".$req->path;
      $updateUrl = AngiImageUrl::where('id', '=', 1)
        ->update(['url' => $newPath, 'angiID' => $req->angiID]);
        // $this->fetch();
      return $newPath;
  }

  public function ImageUpload(Request $request)
  {
    $newPath = AngiImageUrl::where('id', '=', 1)->first();

    $image = $request->file('file');
    $imageName = $image->getClientOriginalName();
    $image->move(public_path($newPath->url), $imageName);

     $imageUpload = new ImageUpload();
     $imageUpload->filename = $imageName;
     $imageUpload->angiID = $newPath->angiID;
     $imageUpload->save();
     return response()->json(['success' => $imageName]);
  }

  public function ImageDelete(Request $request)
  {
    $newPath = AngiImageUrl::where('id', '=', 1)->first();
    $filename = $request->get('filename');
    ImageUpload::where('filename', $filename)->delete();
    $path = public_path() . '/'.$newPath->url.'/' . $filename;
    if (file_exists($path)) {
        unlink($path);
    }
    return $filename;
    // return $request->filename;
  }

  public  function fetch()
    {
      $newPath = AngiImageUrl::where('id', '=', 1)->first();
      $checkPath = public_path($newPath->url);
      if (!is_dir($checkPath)) {
        echo "<div><h4>Зураг оруулаагүй байна.</h4></div>";
      }else{
        $images = File::allFiles(public_path($newPath->url));
          $output = '<div class="row">';
          foreach($images as $image)
          {
              // $ingUrl =asset('public/'.$newPath->url.'/' . $image->getFilename());
              // $output .= '<img alt="Монгол Улсын зэвсэгт хүчин" src="'.$ingUrl.'" data-image="'.$ingUrl.'" style="display:none" data-description="" >
              //           <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>';

              $output .= '
              <div class="col-md-2" style="margin-bottom:16px;" align="center">
                        <img src="'.asset('public/'.$newPath->url.'/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175"/>
                        <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                    </div>
              ';
          }

             $output .= '</div>';
            echo $output;
      }

    }
    public function angiSeeImage(Request $req){

      $getAngi = Angi::where('id', '=', $req->id)->first();
      $getPath = "angiImage/".$getAngi->id."-".$getAngi->idangi;
        // $imgUrl =asset('public/'.$newPath->url.'/' . $image->getFilename()); setPath
        $images = File::allFiles(public_path($getPath));
        return view("angi.imageShow", compact("getPath", "images", "getAngi"));


    }

    public function angiCheckPath(Request $req)
    {
      $newPath = Angi::where('id', '=', $req->angiID)->first();
      $checkPath = public_path("angiImage/".$newPath->id."-".$newPath->idangi);
        if (!is_dir($checkPath))
        {
          return 0;
        }else{
          return $checkPath;
        }
    }


}
