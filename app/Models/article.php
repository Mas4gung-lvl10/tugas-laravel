<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; // ✅ Tambahkan SoftDeletes

class Article extends Model
{
    use HasFactory, SoftDeletes; // ✅ Gunakan SoftDeletes

   // protected $table = 'articles'; // ✅ Pastikan model ini mengarah ke tabel 'articles'

    protected $fillable = [
        'title',
        'description',
        'content', // ✅ Tambahkan 'content'
        'user_id']; // ✅ Tambahkan 'description'

        public function articles () {
            return $this->belongsTo(article::class, 'article_id');
        }
}