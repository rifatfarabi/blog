<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guared = ['created_at', 'deleted_at', 'updated_at'];

    protected $fillable = [
        "name",
        "slug",
        "description",
    ];
}
