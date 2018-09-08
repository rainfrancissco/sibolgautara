<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    //
    protected $table = 'tblkelurahan';

    protected $primaryKey = 'id_kelurahan';

    protected $fillable = [
    	'id_kelurahan',
    	'kelurahan'
    ];

    public function KepalaKeluarga(){
    	return $this->hasMany('App\KepalaKeluarga', 'id_kelurahan');
    }
}
