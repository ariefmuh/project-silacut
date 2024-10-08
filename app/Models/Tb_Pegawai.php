<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_Pegawai extends Model
{
    use HasFactory;
    protected $table='tb_pegawai';
    protected $primaryKey='NIP';
    protected $keyType = 'string';

    protected $guarded = [];

    public $timestamps = false;

    public function dinas()
    {
        return $this->belongsTo(Tb_Dinas::class, 'Id_Dinas');
    }
    public function golongan()
    {
        return $this->belongsTo(Tb_Golongan::class, 'Id_Golongan');
    }
    public function jenisKelamin()
    {
        return $this->belongsTo(Tb_Jenis_Kelamin::class, 'Id_Jenis_Kelamin');
    }

    public function jabatan()
    {
        return $this->belongsTo(Tb_Jabatan::class, 'Id_Jabatan');
    } 
}
