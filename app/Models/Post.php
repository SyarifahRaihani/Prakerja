<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon; // Import Carbon

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $guarded = ['id'];

    protected $dates = [
        'tgl_buat',
        // Kolom tanggal lainnya
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->tgl_buat = Carbon::now(); // Set kolom tgl_buat dengan tanggal saat ini
        });
    }
}
