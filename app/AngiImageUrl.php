<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AngiImageUrl extends Model
{
  protected $table = 'angiimagepath';
  public $primaryKey = 'id';
  public $timestamps = false;
}
