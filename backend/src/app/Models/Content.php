<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
        /**
     *　モデルにDBにfillableでアクセス許可を与える。
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'title',
        'content',
    ];
}
