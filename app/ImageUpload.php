<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
  protected $table = 'image_upload';
  public $primaryKey = 'id';
  
  // protected $fillable = [
  //     'filename'
  // ];
}
//, 'angiID'
