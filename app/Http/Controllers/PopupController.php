<?php

namespace App\Http\Controllers;

use App\Email;
use App\Popup;
use App\Button;
use App\MainText;
use App\SupportingText;
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
        return $request;
            $request_data = $request->all()->popupData;
            $stars = new Stars;
            $stars->top = $request_data['stars']['top'];
            $stars->left = $request_data['stars']['left'];
            $stars->save();

            $mainText  = new MainText;
            $mainText->content = $request_data['mainText']['content'];
            $mainText->content = $request_data['mainText']['top'];
            $mainText->content = $request_data['mainText']['left'];
            $mainText->save();

            $email  = new Email;
            $email->content = $request_data['email']['content'];
            $email->content = $request_data['email']['top'];
            $email->content = $request_data['email']['left'];
            $email->save();

            $button  = new Button;
            $button->content = $request_data['button']['content'];
            $button->content = $request_data['button']['top'];
            $button->content = $request_data['button']['left'];
            $button->save();

            $supportingText  = new SupportingText;
            $supportingText->content = $request_data['supportingText']['content'];
            $supportingText->content = $request_data['supportingText']['top'];
            $supportingText->content = $request_data['supportingText']['left'];
            $supportingText->save();

            return response()->json(['popup_id' => $popup_id]);
      
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
