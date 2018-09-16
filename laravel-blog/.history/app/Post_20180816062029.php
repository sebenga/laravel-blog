<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestanps
    public $timestamps = true;
}