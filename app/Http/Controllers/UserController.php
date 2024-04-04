<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($name, $year)
    {
        // $str = '';
        // for ($i = 1; $i <= 10; $i++) {
        //     $str .= $i;
        // }
        // return 'Hello My Name Is $ONDO  ' . $str;

        return view('user', [
            'name' => $name,
            'year' => $year,
            'address' => 'Nigeria',
        ]);
    }
}
