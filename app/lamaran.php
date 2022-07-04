<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','id_admin','id_user','cv'
    ];
}
