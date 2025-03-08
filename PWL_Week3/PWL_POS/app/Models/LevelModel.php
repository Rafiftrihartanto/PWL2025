<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'level_id'; // Primary key dari tabel m_level
    protected $fillable = ['nama_level']; // Pastikan sesuai dengan kolom yang ada di database

    // Relasi One-to-Many: Satu Level bisa memiliki banyak User
    public function users(): HasMany
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}
