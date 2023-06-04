<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoriesBook extends Model
{
    use HasFactory;
    protected $table = 'catagories_books';
    protected $fillable = ['name'];
    public $timestamps = false;
}
