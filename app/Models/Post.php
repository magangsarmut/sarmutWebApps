<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory;

    // MELAKUKAN IZIN MASS INPUT KEPADA VARIABEL YANG DIKECUALIKAN
    protected $guarded = ['id'];

    // MELAKUKAN INCLUDE AUTHOR DAN CATEGORY PADA WITH
    protected $with = ['author', 'category'];

    // FUNGSI UNTUK MELAKUKAN SEARCH KONTEN
    public function scopeFilter($query, array $filters)
    {
        // QUERY UNTUK MENCARI KONTEN KESELURUHAN
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        // QUERY UNTUK MENCARI KONTEN DARI MENU KATEGORI
        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $category)
            )
        );

        // QUERY UNTUK MENCARI KONTEN DARI MENU AUTHOR
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }


    // MEMBUAT RELASI ANTARA POST DENGAN KATEGORI POST
    public function category()
    {
        // KATEGORI YANG DIPAKAI ADALAH BELONGSTO
        // SATU POST HANYA MEMILIKI SATU CATEGORY
        return $this->belongsTo(Category::class);
    }

    // MEMBUAT RELASI ANTARA POST DENGAN KATEGORI POST
    public function author()
    {
        // KATEGORI YANG DIPAKAI ADALAH BELONGSTO
        // SATU POST HANYA MEMILIKI SATU CATEGORY
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
