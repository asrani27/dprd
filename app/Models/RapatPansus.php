<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapatPansus extends Model
{
    use HasFactory;
    protected $table = 'rapat_pansus';
    protected $guarded = ['id'];
    public function komisi()
    {
        return $this->belongsTo(Komisi::class, 'komisi_id');
    }
}
