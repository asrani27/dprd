<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasil';
    protected $guarded = ['id'];
    public function rapatkomisi()
    {
        return $this->belongsTo(RapatKomisi::class, 'rapat_komisi_id');
    }
    public function rapatpansus()
    {
        return $this->belongsTo(RapatPansus::class, 'rapat_pansus_id');
    }
}
