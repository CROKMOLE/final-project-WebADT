<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helldiver extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'rank',
        'kills',
        'deaths',
        'planet_id'
    ];
}
