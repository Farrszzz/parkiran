<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'password', 'role', 'mall'];
    protected $primaryKey = 'id';

    public function hasRole(string $role): bool {
        return $this->role === $role;
    }
}
