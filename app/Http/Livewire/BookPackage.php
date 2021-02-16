<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\BookPackage as MailBookPackage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BookPackage extends Component
{
    public $first, $second, $phone, $adult, $child, $startDate, $endDate, $tour, $description;



    public function sendEmail()
    {
        $this->validate([
            'first' => "required|string",
            'second' => "required|string",
            'phone' => "required|alpha_num|min:10",
            'tour' => "required|string",
            'description' => "nullable",
            'adult' => "required|numeric",
            'child' => "required|numeric",
            'startDate' => "required|date",
            'endDate' => "required|date"
        ]);

        $bookData = [
            'first' => $this->first,
            'second' => $this->second,
            'phone' => $this->phone,
            'tour' => $this->tour,
            'description' => $this->description,
            'adult' => $this->adult,
            'child' => $this->child,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate


        ];

        Mail::to("info@tavaratoursandtravel.com")
            ->cc("benerd@tavaratoursandtravel.com")
            ->bcc("Kimunto@tavaratoursandtravel.com")

            ->send(new MailBookPackage($bookData));
        Session::flash('success', "Your booking has been successful. We will Contact you soon.");

        $this->first  = "";
        $this->second  = "";
        $this->phone  = "";
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