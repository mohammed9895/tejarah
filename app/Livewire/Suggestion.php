<?php

namespace App\Livewire;

use App\Mail\SuggestionSent;
use App\Models\Province;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Suggestion extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $civil_id;
    public $connected_to_service;
    public $service_type;
    public $province_id = 1;
    public $state_id;
    public $attachments;

    public $details;



    #[Computed]
    public function states()
    {
        return Province::find($this->province_id)->states;
    }

    #[Computed]
    public function provinces()
    {
        return Province::all();
    }

    public function send()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:8',
            'civil_id' => 'required|integer|max_digits:12',
            'connected_to_service' => 'required|integer|in:0,1',
            'attachments' => 'nullable|mimes:pdf|max:2048', // 2MB Max
            'service_type' => 'string|max:255',
            'province_id' => 'required|integer|exists:provinces,id',
            'state_id' => 'required|integer|exists:states,id',
            'details' => 'required|string|max:1000',
        ]);


        if ($this->attachments) {
            $this->attachments = $this->attachments->store('attachments', 'public');
        }
        else {
            $this->attachments = null;
        }

        // Save the suggestion
        \App\Models\Suggestion::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'civil_id' => $this->civil_id,
            'connected_to_service' => $this->connected_to_service,
            'service_type' => $this->service_type,
            'province_id' => $this->province_id,
            'state_id' => $this->state_id,
            'attachment' => $this->attachments,
            'details' => $this->details,
        ]);

        session()->flash('success', 'شكراً لاقتراحك');
        $title = app()->getLocale() == 'ar' ? 'تم إرسال الاقتراح' : 'Suggestion Sent';
//        Mail::to($this->email)->send(new SuggestionSent($this->name, $this->email, $title));

        $this->reset();
    }

    public function render()
    {
        return view('livewire.suggestion');
    }
}
