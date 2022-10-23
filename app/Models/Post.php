<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function isEditable(){
        return auth()->user()->role=='editor' || auth()->user()->id==$this->user_id;
    }
}
