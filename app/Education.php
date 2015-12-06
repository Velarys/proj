<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['edu_id', 'edu_level'];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('app\user', 'edu_id', 'levelofeducation');
    }
}
