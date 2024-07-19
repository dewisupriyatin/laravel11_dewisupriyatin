<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa_model extends Model
{
    use HasFactory;

    protected $table ="siswa";
    protected $primaryKey ="id_siswa";

    public $incrementing = false;
    public $timestamps = true;
}
