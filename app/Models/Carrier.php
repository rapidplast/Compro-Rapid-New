<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;
    protected $table = 'carrier';

    protected $fillable = [
        'jenis',
        'penempatan',
        'jobdesk',
        'kualifikasi',
        'foto',
    ];

    public function getKualifikasiAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setKualifikasiAttribute($value)
    {
        $this->attributes['kualifikasi'] = json_encode($value);
    }
}
