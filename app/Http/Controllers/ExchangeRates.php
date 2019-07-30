<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use Session;
use Redirect;

class ExchangeRates extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createEntry($base, $target)
    {

        //force both requested values to uppercase to work with Third-Party API
        $base = strtoupper($base);
        $target = strtoupper($target);

        //declare variable to hold API information
        $exchangeApi = null;
        //instantiate variable via API
        $exchangeApi = json_decode(file_get_contents('https://api.exchangeratesapi.io/latest?base=' . $base), true);

        //declare variable to give us desired value we're looking for
        $targetRate = null;

        //logically get the conversion rate if it exsists otherwise fail with error
        if(isset($exchangeApi['rates'][$target])){
            $targetRate = $exchangeApi['rates'][$target];
        }else if($base == $target){
            $targetRate = 1;
        }else{
            dd('The desired exchange rate could not be found');
        }
        
        //check to make sure that the conversion rate has been set if so then create the entry in the database
        if($targetRate != null){
            $entry = new Entry;
            $entry->base = $base;
            $entry->target = $target;
            $entry->rate = $targetRate;
            $entry->date = $exchangeApi['date'];
            $entry->save();
        }


        dd('Set Conversion Rate: ' . $base . ', ' . $target . ', ' . $targetRate);
        

        
    }

    public function destroy($id)
    {
        $entry = Entry::find($id);
        $entry->delete();

        // redirect
        // Session::flash('message', 'Successfully signed out guest!');
        return Redirect::to('admin');
    }
    


}
