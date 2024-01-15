<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function archieve()
    {
        $this->is_archieved = true;
        $this->save();
    }
}
