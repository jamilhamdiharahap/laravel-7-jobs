<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','status','logo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Status(){

        return $this->belongsTo('App\masterModel','status','id');
    }

    public static function  expired(){

        $date = date('m');
        $profit = User::whereMonth('created_at',$date)->Where('status','@aB&IT!9')->get()->count();
        return $profit;
    }

    public function getDatajobs(){

        return $this->belongsTo('App\jobs','id','id_admin');
    }

    public function getDatatype(){

        return $this->belongsTo('App\jobs_type','id','id_admin');
    }
}
