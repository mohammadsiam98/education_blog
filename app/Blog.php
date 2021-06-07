<?php
use Cviebrock\EloquentTaggable\Taggable;
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model{
    use SoftDeletes;
   
    protected $fillable = [
        'category','title','description','image','highlightedText'
    ];
    
  


}
