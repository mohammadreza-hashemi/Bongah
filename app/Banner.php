<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
class Banner extends Model
{
    protected $fillable =[//for create in store
            'user_id',
            'strite',
            'city',
            'zip' ,
            'country' ,
            'state',
            'price',
            'description',
        
    ];

    public function photos() {
        return $this->hasMany(Photo::class);
    }
    
    //accessor  important get P capitel Attribute 
    public function getPriceAttribute($price){
        return number_format($price).' '.'$';
    }
    public function getDescriptionAttribute($description){
        return nl2br($description);
    }
    
    
   //  scop function khocemon   //با$queryدسترسی پیدا میکنید به دیتابیس داخل مدل وجود داره 
    public function scopeLocatedAt($query,$zip,$strite){//create helper function avalesh scope and capitel L and where to use Banner::locatedAt****
         $strite= str_replace('-',' ', $strite);
         return $query->where(compact('zip','strite'));
    }
    
    
   
}
