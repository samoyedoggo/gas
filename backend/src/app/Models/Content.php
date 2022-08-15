<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    //　論理削除：マイグレファイルに$table->softDeletes();と記載し、対応モデルで下記のように書くことで使用可能になる。
    use SoftDeletes;

    /**
     *　モデルにDBにfillableでアクセス許可を与える。
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'title',
        'content',
        'image_url',
        'deleted_at'
    ];
}
