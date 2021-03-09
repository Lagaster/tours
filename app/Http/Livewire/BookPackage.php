<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\BookPackage as MailBookPackage;
use App\Rules\FutureDate;
use App\Rules\previousDate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BookPackage extends Component
{
    public $first, $second, $phone, $email, $adult, $child, $startDate, $endDate, $tour, $description;



    public function sendEmail()
    {
        $this->validate([
            'first' => "required|string",
            'second' => "required|string",
            'phone' => "required|alpha_num|min:10",
            'email' => "required|email",
            'tour' => "required|string",
            'description' => "nullable",
            'adult' => "required|numeric|min:0",
            'child' => "required|numeric|min:0",
            'startDate' => ['required', 'date',  new previousDate()],
            'endDate' => ['required', 'date',  new previousDate(), new FutureDate($this->startDate)],
        ]);

        $bookData = [
            'first' => $this->first,
            'second' => $this->second,
            'phone' => $this->phone,
            'email' => $this->email,
            'tour' => $this->tour,
            'description' => $this->description,
            'adult' => $this->adult,
            'child' => $this->child,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate


        ];


        Mail::to('infowaretechs@gmail.com', 'Tavara Tours and Travel')
        //   ->cc('abrahamkivosh@gmail.com', 'Abraham Kivondo')infowaretechs@gmail.com
            ->send(new MailBookPackage($bookData));
        Session::flash('success', "Your booking has been successful. We will Contact you soon.");

        $this->first  = "";
        $this->second  = "";
        $this->phone  = "";
        $this->email  = "";
        $this->description  = "";
        $this->adult  = "";
        $this->child  = "";
        $this->startDate  = "";
        $this->endDate = "";
    }

    public function render()
    {
        return view('livewire.book-package');
    }
}
