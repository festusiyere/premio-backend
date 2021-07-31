<?php

namespace App\Http\Controllers;

use App\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Popup $popup)
    {
        $data = [
            'top' => '40px',
            'bottom' => '50px',
             'content' => 'this is a test question'
             ];
        return response()->view('pop-up' , )
        ->header('Content-Type', 'application/javascript');

    }

    public function edit(Popup $popup)
    {
        //
    }


    public function update(Request $request, Popup $popup)
    {
        //
    }

    public function destroy(Popup $popup)
    {
        //
    }
}
