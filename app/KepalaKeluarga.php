<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class KepalaKeluarga extends Model
{
    //
    protected $table = 'kepalakeluarga';
    protected $primaryKey = 'id_warga';
    protected $fillable = [
    	'id_warga',
        'id_kelurahan',
    	'nokk',
    	'alamat',
    	'lingkungan',
    	'id_user',
    	'isactive',
    ];

    public function warga(){
    	return $this->belongsTo('App\Warga', 'id_warga');
    }

    public function kelurahan(){
        return $this->belongsTo('App\Kelurahan', 'id_kelurahan');
    }
}
