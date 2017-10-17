<?php
/**
 * Created by PhpStorm.
 * User: strahinja.ristic
 * Date: 10/17/2017
 * Time: 9:17 AM
 */
namespace  App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model {



    protected $fillable = [
        'to','from'
    ];


}