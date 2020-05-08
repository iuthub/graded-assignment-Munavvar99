<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = ['title','category','description','price','status','file1','file2','file3','file4'];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }
    public function photos()
    {
        return $this->hasMany('App\PostPhoto');
    }
}