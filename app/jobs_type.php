<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs_type extends Model
{
    protected $fillable = ['id_type','name','id_admin'];
    protected $primaryKey = 'id_type';

    public $incrementing = false;
}
