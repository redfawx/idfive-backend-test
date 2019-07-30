<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $entry = new Entry;
        // $entry->host_id = $request->host;
        // $entry->save();

        
        $json = json_decode(file_get_contents('https://api.exchangeratesapi.io/latest?base=' . $base), true);
        
        dd($json['rates']);

        foreach($json['rates'] as $item)
        {
           
                dd($item);
            
        }
        // dd($json['rates']);
        
    }
    


}
