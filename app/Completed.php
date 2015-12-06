<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Completed extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'completed';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_completed', 'author'];
    
    public $timestamps = false;
    
    public function data()
    {
        return $this->belongsTo('app\data', 'id_completed', 'completed_by');
    }
}
