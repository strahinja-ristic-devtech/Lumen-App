<?php
/**
 * Created by PhpStorm.
 * User: strahinja.ristic
 * Date: 10/17/2017
 * Time: 9:29 AM
 */

namespace App\Http\Controllers;

use Log;
use App\Flight;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class FlightController extends Controller
{
    public function create(Request $request){

        $to = $request->input('to');
        $from = $request->input('from');


        Flight::create(['to'=>$to,'from'=>$from]);
        Log::info('Created a new flight');

        return "success";
    }

    public function delete(Request $request, $id){



        Flight::destroy($id);

        Log::info('Deleted flight' .$id);

        return "success delete " . $id;

    }

    public function update(Request $request, $id){

        $to = $request->input('to');
        $from = $request->input('from');



        Flight::where('id',$id)->update(['to'=>$to,'from'=>$from]);

        $updFlight = Flight::find($id);

        return $updFlight;

    }

    public function readAll(Request $request){

        $flights = Flight::all();

        Log::info('Showing flights' .$flights);

        return view('flights',['flights'=>$flights]);
    }

    public function readOne(Request $request, $id){

        $flight = Flight::find($id);

        return $flight;
    }


}