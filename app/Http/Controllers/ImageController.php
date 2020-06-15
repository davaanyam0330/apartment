<?php

namespace App\Http\Controllers;

use App\Image;
use App\album;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $images = Image::all();
      foreach($images as $image){
        $getName = $image->name;
      }
        return view("Images.index", compact("images", "getName"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
     $image = $request->file('file');

     // dd($request->file('file'));

     $imageName = time() . '.' . $image->extension();

     $image->move(public_path('images'), $imageName);

     return response()->json(['success' => $imageName]);
    }

  public  function fetch()
    {
     $images = File::allFiles(public_path('images'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      // $output .= '
      // <div class="row" style=" padding-right:20px; padding-left:20px;"> <div id="galleryall">
      //           <img src="'.asset('images/' . $image->getFilename()).'" data-image="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
      //           <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button> </div>
      //       </div>
      // ';

      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('images/' . $image->getFilename()).'" data-image="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }
    public function delete(Request $request)
    {
     if($request->get('name'))
     {
      File::delete(public_path('images/' . $request->get('name')));
     }
    }

    public function store(Request $request)
    {
      // return "irlee";
      // $image = $request->file('file');
      dd($request->file('file'));


        // dd($request->all());

        // foreach($request->file("imageName") as $image){
        //
        // }
        if($request->hasFile('file')){
          $image = $request->file('file');

          // $album = album::create(['name' => $request->get('album_name') ]);
          // foreach($request->file("image_name") as $image){
          //   $puth = $image->store('uploads', 'public');
          //   Image::create([
          //     'name' => $puth,
          //     'album_id' => $album->id
          //   ]);
          // }
          }
          //
          // Image::create([
          //   'name' => $request->file('img_name')->store('uploads', 'public'),
          //   'album_id' => 1
          // ]);

          // return redirect("/album");
        // }else{
        //   dd($request->all());
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
