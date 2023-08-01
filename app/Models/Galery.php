<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\sluggable;

class Galery extends Model
{
    use HasFactory;

    // 1) pilih yang ingin dimasukkan
    // protected $fillable = ['title', 'excerpt', 'body'];

    // 2) kebalikan yang diatas, jadi semuanya dipilih kecuali yang ditake
    protected $guarded = ['id'];

    protected $with = ['category','author'];

    // cara kedua search
        // public function scopeFilter($query ) {
        //     if(request('search')) {
        //        return $query->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%'); 
        //     }
        // }
    // akhir kedua search

    // cara ketiga search
    // public function scopeFilter($query, array $filters ) {
    //     if(isset($filters['search']) ? $filters['search'] : false){
        //    return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%'); 
    //     }
    // }
    // akhir ketiga

    // cara keempat search agar lebih efisien
    // public function scopeFilter($query, array $filters ) {
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //         ->orWhere('body', 'like', '%' . $search . '%'); 
    //     });

    //     $query->when($filters['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category){
    //             $query->where('slug', $category);
    //         });           
    //     });

    //     $query->when($filters['author'] ?? false, fn($query, $author) => 
    //     $query->whereHas('author', fn($query) => 
    //     $query->where('username', $author)
    //          )
    //     );
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function username()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

}
