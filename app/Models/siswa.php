<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'giris';
    protected $fillable = ['nama_siswa'];
    protected $guarded = ['id'];
}
