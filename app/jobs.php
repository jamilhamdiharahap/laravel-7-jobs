<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $fillable = [
        'id',
        'id_type',
        'id_ktg',
        'id_admin',
        'desc',
        'salary'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;


    public function jobsType(){

        return $this->belongsTo('\App\jobs_type','id_type','id_type');
    }

    public function jobsKtg(){

        return $this->belongsTo('\App\jobs_kategori','id_ktg','id');
    }

    public function company(){

        return $this->belongsTo('\App\User','id_admin','id');
    }

    public function profils(){

        return $this->belongsTo('\App\profil','id_admin','id_admin');
    }
}
