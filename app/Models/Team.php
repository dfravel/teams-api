<?php

namespace App\Models;

use Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    protected $table = 'teams';

    use SoftDeletes;

    protected $fillable = [
        'hashed_id',
        'name'
    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];


    public function getRouteKeyName()
    {
        return 'hashed_id';
    }


    public function players()
    {
        return $this->hasMany('App\Models\Player', 'team_id');
    }

}
