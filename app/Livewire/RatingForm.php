<?php

namespace App\Livewire;

use App\Models\Feedback;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class RatingForm extends Component
{
    public $rating;
    public $message;

    public function render()
    {
        return view('livewire.rating-form');
    }

    public function ratingChange($rate)
    {
        $this->rating = $rate;
    }

    public function send(): void
    {
        if ($this->rating == null) {
            session()->flash('error', __('global.rating_error'));
        }
        else {
            $executed = RateLimiter::attempt(
                'send-message:'.request()->ip(),
                $perMinute = 1,
                function() {
                    Feedback::create([
                        'rating' => $this->rating,
                        'message' => $this->message,
                    ]);
                    session()->flash('success', __('global.rating_success'));
                }
            );

            if (! $executed) {
                session()->flash('error', __('global.rating_error'));
            }
        }
    }
}
