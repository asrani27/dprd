<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pansus extends Model
{
    use HasFactory;
    protected $table = 'pansus';
    protected $guarded = ['id'];
    public function pimpinan()
    {
        return $this->belongsTo(Pimpinan::class, 'pimpinan_id');
    }
    public function komisi()
    {
        return $this->belongsTo(Komisi::class, 'komisi_id');
    }
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}
