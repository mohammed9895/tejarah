<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $to = 'info@tejara.gov.om';

    public $first_name;
    public $family_name;
    public $email;
    public $confirm_email;
    public $phone;
    public $company_name;
    public $cr;
    public $interested_in;


    public function send()
    {
        $this->validate([
            'first_name' => 'required|string',
            'family_name' => 'required|string',
            'email' => 'required|email|string',
            'confirm_email' => 'required|same:email',
            'phone' => 'numeric|min:8',
            'company_name' => 'nullable|string',
            'cr' => 'nullable|numeric|min:4',
            'interested_in' => 'nullable|string',
        ]);

        Mail::to('toshiba9895@gmail.com')->send(new \App\Mail\ContactForm($this->first_name, $this->family_name, $this->email, $this->phone,
            $this->company_name, $this->cr, $this->interested_in));
        session()->flash('message', 'Email Sent Successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
