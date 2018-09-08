<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    //
    use SoftDeletes;

    protected $table = 'warga';

    protected $primaryKey = 'id_warga';

    protected $fillable = [
        'id_kepalakeluarga','nik', 'nama', 'jenis_kelamin', 'id_hubungan', 'tempat_lahir', 
        'tanggal_lahir', 'id_kawin',
        'id_agama', 'id_lembaga', 'id_wni', 'id_suku', 'id_pendidikan',
        'id_bacatulis', 'id_matapencarian', 'nama_ayah', 'nama_ibu',
        'akta_lahir', 'id_ektp', 'id_kb', 'id_kemiskinan', 'id_rumah',
        'id_pbb', 'id_penghasilan', 'id_lahan', 'id_sumberair', 'id_bantuan',
        'id_berobat', 'id_penerangan', 'id_memasak', 'ternak', 'kendaraan',
        'kelainan', 'usaha', 'id_bangunan', 'tanggungan', 'id_penduduk', 'id_user', 'isactive'
    ];

    // protected $guarded = ['id_kepalakeluarga'];

    protected $hidden = [
        'remember_token',
    ];

    public function kepalakeluarga(){
    	return $this->hasOne('App\KepalaKeluarga', 'id_warga');
    }
}
