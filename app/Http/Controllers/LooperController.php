<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LooperController extends Controller
{   
    /**
     * Show Page To make Pattern
     *
     * @param  none
     * @return view()
     */
    public function index()
    {
        return view("admin/make_loop");
    }

    /**
     * Generates loop with given parameter
     *
     * @param  Illuminate\Http\Request  $request
     * @return view()
     */
    public function loop_it(Request $request)
    {
        $validatedData = $request->validate([
            'rows' => 'required',
        ]);

        $rows = $request->input("rows");
        $pattern = "";
        if($rows > 26) {
            $request->session()->flash('status', 'Please provide a value less than 27!');
    	    return redirect(url("admin/make_loop"));
        }
        $alphabets = range('A', 'Z');  

        for ($i= 0; $i <= $rows; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                $pattern .= $alphabets[$j];
            }
            $pattern .= "<br>";
        }

        return view("admin/pattern", ["pattern" => $pattern]);
    }

}
