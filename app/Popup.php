<?php

namespace App;

use App\Email;
use App\Stars;
use App\Button;
use App\MainText;
use App\SupportingText;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $guarded = [ ];
    public function email()
    {
        return $this->hasOne(Email::class);
    }

    public function button()
    {
        return $this->hasOne(Button::class);
    }

    public function main_text()
    {
        return $this->hasOne(MainText::class);
    }

    public function stars()
    {
        return $this->hasOne(Stars::class);
    }

    public function supporting_text()
    {
        return $this->hasOne(SupportingText::class);
    }
}
