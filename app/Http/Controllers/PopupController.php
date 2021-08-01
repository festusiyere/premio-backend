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
        $popUpData['mainText'] = [
            'top' => '40px',
            'left' => '50px',
            'content' => 'this is a test question'
             ];

        $popUpData['email'] = [
            'top' => '40px',
            'left' => '50px',
            'content' => 'this is a test question'
            ];

        $popUpData['button'] = [
                'top' => '40px',
                'left' => '50px',
                'content' => 'this is a test question'
            ];

        $popUpData['supportingText'] = [
                'top' => '40px',
                'left' => '50px',
                'content' => 'this is a test question'
                    ];
        
        $popup['background-color'] = 'red';
        return response()->view('pop-up' , compact('popUpData' ,'popup'))
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
