<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #parente eklemek için ekledik
    protected $appends = [
        'parent',
    ];
    #one to many
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function  children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

}
