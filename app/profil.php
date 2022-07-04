<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','address','website', 'employee', 'since','fb','ig','tw','tentang','id_admin','title'
    ];


    public function companies(){

        return $this->belongsTo('\App\User','id_admin','id');
    }
}
