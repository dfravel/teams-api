<?php

namespace App\Models;

use Hashids;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    protected $table = 'players';

    use SoftDeletes;

    protected $fillable = [
        'team_id',
        'hashed_id',
        'first_name',
        'last_name'
    ];

    protected $dates = ['deleted_at'];

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }


}
