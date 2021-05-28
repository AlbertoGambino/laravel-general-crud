<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyMatch extends Model
{
    protected $table = 'matches';

    protected $fillable = [

        'team1',
        'team2',
        'point1',
        'point2',
        'result'

    ];

    public function getResult(){

        return $this -> point1 > $this -> point2;
    }

    public function getTeams() {

        return $this -> team1 . ' - ' . $this -> team2;
    }
}
