<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs_kategori extends Model
{

    protected $fillable = ['id','name'];

    protected $primaryKey = 'id';

    public $incrementing = false;
}
