<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'pain', 'tiredness', 'nausea', 'depression', 'anxiety', 'drowsiness', 'appetite', 'wellbeing', 
                           'sob', 'other_name', 'other_value', 'minimental', 'pps', 'cage', 'completed_by', 'diagram_front', 'diagram_back',
                           'created_at', 'updated_at'];
                                     
    public function completed()
    {
        return $this->hasOne('app\Completed', 'id_completed', 'completed_by');
    }
    
}