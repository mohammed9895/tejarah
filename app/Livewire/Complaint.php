<?php

namespace App\Livewire;

use App\Mail\ComplaintSubmitted;
use App\Mail\SuggestionSent;
use App\Models\Province;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

class Complaint extends Component
{

    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $civil_id;

    public $cr;
    public $service_type;

    public $submission_type;
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
            'civil_id' => 'required|numeric|max_digits:12',
            'cr' => 'required|numeric|max_digits:14',
            'attachments' => 'nullable|mimes:pdf|max:2048', // 2MB Max
            'service_type' => 'string|max:255',
            'submission_type' => 'required|integer|in:1,0',
            'province_id' => 'required|integer|exists:provinces,id',
            'state_id' => 'required|integer|exists:states,id',
            'details' => 'required|string|max:1000',
        ]);

        if ($this->attachments) {
            $this->attachments = $this->attachments->store('attachments', 'public');
        }else{
            $this->attachments = null;
        }

        // Save the complaint
        \App\Models\Complaint::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'civil_id' => $this->civil_id,
            'cr_number' => $this->cr,
            'service_type' => $this->service_type,
            'submission_type' => $this->submission_type,
            'province_id' => $this->province_id,
            'state_id' => $this->state_id,
            'attachment' => $this->attachments,
            'details' => $this->details,
        ]);

        session()->flash('success', __('complaint.success'));
        $title = app()->getLocale() == 'ar' ? 'تم إرسال الاقتراح' : 'Suggestion Sent';
//        Mail::to($this->email)->send(new ComplaintSubmitted($this->name, $this->email, $title));
        $this->reset();
    }
    public function render()
    {
        return view('livewire.complaint');
    }
}
