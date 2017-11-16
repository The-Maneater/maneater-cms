<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Mail\InterestedInAdvertising;
use App\Mail\OrderAPhoto;
use App\Mail\WorkForUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function feedback()
    {
        $to = "msmith@themaneater.com";
        Mail::to($to)
            ->send(new Feedback(request('name'), request('self_email'), request('submission'), request('about')));

        return redirect("email/success");
    }

    public function workForUs()
    {
        $to = "";
        switch(request('area_of_interest')){
            case "news":
                $to = "news@themaneater.com";
                break;

            case "arts":
                $to = "move@themaneater.com";
                break;

            case "sports":
                $to = "sports@themaneater.com";
                break;

            case "photo":
                $to = "photos@themaneater.com";
                break;

            case "design":
                $to = "design@themaneater.com";
                break;

            case "copy":
                $to = "copy@themaneater.com";
                break;

            case "web":
                $to = "online@themaneater.com";
                break;

            case "business":
                $to = "advertising@themaneater.com";
                break;

            default:
                $to = "online@themaneater.com";
                break;
        }

        //$to = "msmith@themaneater.com";
        Mail::to($to)
            ->send(new WorkForUs(request('name'), request('class_title'), request('self_email'), request('previous_experience')));

        return redirect("email/success");
    }

    public function orderPhoto()
    {
        $to = "photos@themaneater.com";
        Mail::to($to)
            ->send(new OrderAPhoto(request('name'), request('self_email'), request('photo_url'), request('print_size'), request('comments')));

        return redirect("email/success");
    }

    public function advertising()
    {
        $to = "advertising@themaneater.com";
        Mail::to($to)
            ->send(new InterestedInAdvertising(request('contact_name'),
                request('contact_company'),
                request('phone_number'),
                request('address'),
                request('comments')));
        return redirect('email/success');
    }

    public function emailSuccess()
    {
        return view('emails.success');
    }
}
