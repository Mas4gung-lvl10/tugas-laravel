<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article_Comments extends Model
{
    use HasFactory;

    protected $table = 'article_comments'; 

    protected $fillable = ['id', 'post_id', 'comment'];

    /**
     * Relasi ke model Article
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'artcles'); // ✅ Perbaikan sintaks
    }

    /**
     * Relasi ke model User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // ✅ Perbaikan sintaks
    }
}
