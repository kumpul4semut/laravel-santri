<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriModel extends Model
{
    use HasFactory;

    protected $table = 'santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = ['nm_santri', 'tmp_lahir', 'tgl_lahir', 'alamat', 'no_hp'];
}
