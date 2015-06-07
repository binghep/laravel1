<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';
    protected $fillable = ['title', 'body', 'published_at'];//things users can change. do not include id.

}
