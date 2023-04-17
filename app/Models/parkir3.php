<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkir3 extends Model
{
    protected $table = 'parkir3';
    protected $fillable = ['platNomor', 'ruangParkir', 'sudah_masuk', 'pernah_masuk', 'tarif'];
    protected $primaryKey = 'id';
    
}
