<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'image', 'body', 'type_id', 'user_id'];

        public function type() {
            return $this->hasOne(Type::class);
        }

        public function user() {
            return $this->belongsTo(User::class);
        }
}
