<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel jika berbeda
    protected $table = 'products';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['name', 'description', 'price', 'image'];

    // Mengizinkan pengaturan timestamps
    public $timestamps = true;

    protected $dates = ['deleted_at'];
}
