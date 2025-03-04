<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //menedefinisikan nama tabel yang digunakan oleh model ini
    protected $primarykey = 'user_id'; //menedefinisikan primary key dari tabel yang digunakan
}
