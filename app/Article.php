<?php namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';
    protected $fillable = ['title', 'body', 'published_at'];//things users can change. do not include id.

    //mutator:do something before writing to the database. convension: setNameAttribute. published_at=>PublishedAt
    public function setPublishedAtAttribute($date)
    {
        //parse Y-m-d date string and create carbon date with h-m-s.
        //$this->attributes['published_at']=Carbon::createFromFormat('Y-m-d', $date);
        $this->attributes['published_at']=Carbon::parse($date);//display 00:00:00 on future dates.
    }
}
