<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable= [
    	'id_user','post_title','divisi','gambar','post_text',
    ];
}
