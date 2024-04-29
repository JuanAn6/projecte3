<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;
    protected $primaryKey = "cat_id";
    protected $table = "categories";
    protected $fillable = ['cat_id', 'cat_esp_id', "cat_nom"];
}
