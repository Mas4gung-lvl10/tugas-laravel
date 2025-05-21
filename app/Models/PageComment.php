<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageComment extends Model
{
    use HasFactory;

    protected $fillable = [

   // gunakan page_id sesuai migration dan form
        'comment',
        'page_id',
        'id',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
