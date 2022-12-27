<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('nama_produk', 'like', '%' . request('search') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
