<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{

    use HasTranslations;
    public $translatable  = ['Name'];

    protected $fillable=['Name','Notes'];
    protected $table = 'grades';
    public $timestamps = true;

    public function Section()
    {
        return $this->hasMany('App\Models\Section','Grade_id');
    }

}