<?php

namespace App\Http\Controllers;

use App\Email;
use App\Popup;
use App\Stars;
use App\Button;
use App\MainText;
use App\SupportingText;
use Illuminate\Http\Request;

class PopupController extends Controller
{

    public function index()
    {
        return Popup::with(['email', 'button', 'main_text', 'stars', 'supporting_text'])->get();
    }

    public function store(Request $request)
    {
        $request_data = $request->all();

        $stars = new Stars();
        $stars->top = $request_data['stars']['top'];
        $stars->left = $request_data['stars']['left'];
        $stars->save();

        $main_text  = new MainText();
        $main_text->content = $request_data['mainText']['content'];
        $main_text->top = $request_data['mainText']['top'];
        $main_text->left = $request_data['mainText']['left'];
        $main_text->save();

        $email  = new Email();
        $email->content = $request_data['email']['content'];
        $email->top = $request_data['email']['top'];
        $email->left = $request_data['email']['left'];
        $email->save();

        $button  = new Button();
        $button->content = $request_data['button']['content'];
        $button->top = $request_data['button']['top'];
        $button->left = $request_data['button']['left'];
        $button->save();

        $supporting_text  = new SupportingText();
        $supporting_text->content = $request_data['supportingText']['content'];
        $supporting_text->top = $request_data['supportingText']['top'];
        $supporting_text->left = $request_data['supportingText']['left'];
        $supporting_text->save();

        $popup = new Popup();
        $popup->name = $request_data['name'];
        $popup->background_color = $request_data['popup']['background-color'];
        $popup->main_text_id = $main_text->id;
        $popup->supporting_text_id = $supporting_text->id;
        $popup->stars_id = $stars->id;
        $popup->email_id = $email->id;
        $popup->button_id = $button->id;

        $popup->save();

        return response()->json(['popup_id' => $popup->id]);
    }

    public function show($popup)
    {
        $popup = Popup::find($popup);
        return response()->view('pop-up', compact('popup'))
            ->header('Content-Type', 'application/javascript');
    }

    public function edit(Popup $popup)
    {
        //
    }


    public function update(Request $request, Popup $popup)
    {
        $request_data = $request->all();

        $stars = Stars::find($request_data['stars']['id']);
        $stars->top = $request_data['stars']['top'];
        $stars->left = $request_data['stars']['left'];
        $stars->save();

        $main_text  = MainText::find($request_data['mainText']['id']);
        $main_text->content = $request_data['mainText']['content'];
        $main_text->top = $request_data['mainText']['top'];
        $main_text->left = $request_data['mainText']['left'];
        $main_text->save();

        $email  = Email::find($request_data['email']['id']);
        $email->content = $request_data['email']['content'];
        $email->top = $request_data['email']['top'];
        $email->left = $request_data['email']['left'];
        $email->save();

        $button  = Button::find($request_data['button']['id']);
        $button->content = $request_data['button']['content'];
        $button->top = $request_data['button']['top'];
        $button->left = $request_data['button']['left'];
        $button->save();

        $supporting_text  =  SupportingText::find($request_data['supportingText']['id']);
        $supporting_text->content = $request_data['supportingText']['content'];
        $supporting_text->top = $request_data['supportingText']['top'];
        $supporting_text->left = $request_data['supportingText']['left'];
        $supporting_text->save();

        $popup = Popup::find($request_data['id']);
        $popup->name = $request_data['name'];
        $popup->background_color = $request_data['popup']['background-color'];
        $popup->save();

        return response()->json(['popup' => $popup]);
    }

    public function destroy(Popup $id)
    {
        $popup = $id;
        Popup::destroy($popup->id);
        Stars::destroy($popup->stars);
        MainText::destroy($popup->main_text);
        Email::destroy($popup->email);
        Button::destroy($popup->button);
        SupportingText::destroy($popup->supporting_text);
        return true;
    }
}
