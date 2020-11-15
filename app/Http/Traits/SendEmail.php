<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Mail;

Trait SendEmail
{
    public function sendEmail($data)
    {
        $address = config('mail.address');

        Mail::send('mails.mail', $data->toArray(), function ($message) use($address){

            $message->to($address, 'Wssel Contact')->subject('Wssel Customers Info ');

            $message->from('server@wssel.com', 'server');
        });
    }
}
