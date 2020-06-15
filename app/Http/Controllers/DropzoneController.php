<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class DropzoneController extends Controller
{
  function index()
    {
     return view('Images.index');
    }

    public function upload(Request $request)
    {
      // dd($request);
      // $imageCount = $request->file('file')->count();
      error_log('jkkkkkkkk');
     $image = $request->file('file');

     // Log::info('jjjjjjj');
     // dd($image);
     // foreach($image as $img){
     //   $imageName = time() . '.' . $img->extension();
     //
     //   $img->move(public_path('images'), $imageName);
     //
     //   return response()->json(['success' => $imageName]);
     // }

     $imageName = time() . '.' . $image->extension();

     $image->move(public_path('images1'), $imageName);

     // return response()->json(['success' => $imageName]);
    }

    function fetch()
    {
     $images = \File::allFiles(public_path('images1'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.url('public/images1/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    function delete(Request $request)
    {
     if($request->get('name'))
     {
      \File::delete(public_path('images1/' . $request->get('name')));
     }
    }
}
