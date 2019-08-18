<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Banner;


class Photo extends Model
{
    protected $table='banner_photos';
    protected $fillable=['path'];//path->create(['path' => 'foo.jpg'])
    public function banner() {
        return $this->belongsTo(Banner::class);
    }
    public function delete(){
        parent::delete();
        \File::delete([
        'path',
        ]);
    }
   
}
