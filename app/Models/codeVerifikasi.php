<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codeVerifikasi extends Model
{
    use HasFactory;
    // Specify the table name if it's not the plural of the model name
    protected $table = 'code_veririkasi';

    // Define the primary key if it's not 'id'
    // protected $primaryKey = 'email'; // Assuming 'email' is the primary key

    // Disable auto-incrementing since 'email' is not an integer
    public $incrementing = false;

    // Specify the data type of the primary key if it's not an integer
    protected $keyType = 'string';

    // Define the columns that are mass assignable
    protected $fillable = ['email', 'kode_verifikasi', 'waktu'];
}
