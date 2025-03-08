<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';

    protected $fillable = ['book_id','user_id','sumary']; 

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
