<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'data_pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_telepon',
        'email',
        'jabatan',
        'departemen',
        'tanggal_masuk',
        'gaji_pokok',
        'status_kepegawaian',
        'foto_profil',
        'nik',
        'npwp'
    ];
    public $timestamps = false;

    public static function findByColumns(array $filters)
    {
        $query = self::query();

        foreach ($filters as $column => $value) {
            if (!empty($value)) {
                $query->where($column, 'like', '%' . $value . '%');
            }
        }

        return $query->get();
    }
}