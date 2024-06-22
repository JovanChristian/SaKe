<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';

    protected $fillable = [
        'namaYayasan',
        'tanggalLahir',
        'jenisPengasuh',
        'durasiKontrak',
        'image', // assuming this corresponds to the file upload field
    ];
}
