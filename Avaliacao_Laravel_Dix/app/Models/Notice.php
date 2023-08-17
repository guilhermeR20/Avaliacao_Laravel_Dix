<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'content', 'user_id'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
