<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkir2 extends Model
{
    protected $table = 'parkir2';
    protected $fillable = ['platNomor', 'ruangParkir', 'sudah_masuk', 'pernah_masuk', 'tarif'];
    protected $primaryKey = 'id';
    
}
