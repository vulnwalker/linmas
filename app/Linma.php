<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linma extends Model
{
    use LogsActivity;
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'linmas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_kecamatan',
      'id_kelurahan',
      'nama',
      'tempat_lahir',
      'tanggal_lahir',
      'email',
      'hp',
      'no_ktp',
      'jenis_kelamin',
      'alamat',
      'alamat_kecamatan',
      'alamat_kelurahan',
      'rt',
      'rw',
      'status_linmas',
      'jenis_linmas',
      'no_angota',
      'id_sk',
      'tgl_penugasan_mulai',
      'tgl_penugasan_akhir',
      'keterangan',
      'foto',
      'user_id',
    ];



    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
