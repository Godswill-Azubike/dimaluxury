<?php

namespace App\Http\Controllers;

use App\Models\Dimaluxury3;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    //

    public function indexPage()
    {
        return view('welcome', [
            'productData' => Dimaluxury3::orderBy('id', 'desc')->simplePaginate(9),
        ]);
    }
}
