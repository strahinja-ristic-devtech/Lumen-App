<?php
/**
 * Created by PhpStorm.
 * User: strahinja.ristic
 * Date: 10/16/2017
 * Time: 3:26 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(Request $request){

        $name = $request->input('name');
        $surname = $request->input('surname');

        //DB::insert('insert into users (name, surname,created_at,updated_at) values (?, ?,?,?)', [$name, $surname,date("Y-m-d h:i:sa"),date("Y-m-d h:i:sa")]);

        DB::table('users')->insert(['name'=>$name,'surname'=>$surname]);

        return "success";
    }

    public function delete(){


    }

    public function update(){


    }

    public function read(){


    }


}