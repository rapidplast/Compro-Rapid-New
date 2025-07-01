<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inovation extends Model
{
    use HasFactory;
    protected $table = 'inovation';

    protected $fillable = [
        'kategory',
        'judul',
        'foto',
        'keterangan',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
