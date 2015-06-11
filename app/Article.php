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
    protected $fillable = ['title', 'body','user_id'];//things users can change. do not include id.

   // protected $dates=['published_at'];

//    public function scopePublished($query)
//    {
//       $query->where('published_at','<=', Carbon::now());
//    }
//
//    public function scopeUnpublished($query)
//    {
//        $query->where('published_at','>', Carbon::now());
//    }

    //mutator:do something before writing to the database. convension: setNameAttribute. published_at=>PublishedAt
//    public function setPublishedAtAttribute($date)
//    {
//        //parse Y-m-d date string and create carbon date with h-m-s.
//        //$this->attributes['published_at']=Carbon::createFromFormat('Y-m-d', $date);
//        $this->attributes['published_at']=Carbon::parse($date);//display 00:00:00 on future dates.
//    }

    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\User','user_id');//user_id is the foreign key in users table
    }

    public function owner_name()
    {
        return $this->owner->name;
    }
}
