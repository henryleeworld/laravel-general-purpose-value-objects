<?php

namespace App\Http\Controllers;

use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\Phone;
use MichaelRubel\ValueObjects\Collection\Primitive\Number;

class ObjectController extends Controller
{
    public function show() 
    {
        $number = Number::make('34.567890', scale: 2);
        echo '數字：' . $number->value() . PHP_EOL;
        $email = Email::make('henry@microsofthelps.software');
        $emailAry = $email->toArray();
        echo '電子郵件地址：' . $emailAry['email'] . PHP_EOL;
        echo '電子郵件使用者名稱：' . $emailAry['username'] . PHP_EOL;
        echo '電子郵件網域：' . $emailAry['domain'] . PHP_EOL;
        $phone = Phone::make(' +886 02 2162 2000 ');
        echo '電話：' . $phone->value() . PHP_EOL;
    }
}
