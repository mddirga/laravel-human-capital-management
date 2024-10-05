<?php

namespace App\Livewire;

use App\Models\Schedule;
use Livewire\Component;
use Auth;

class Presensi extends Component
{
    public function render()
    {
        $schedule = Schedule::where('user_id', Auth::user()->id)->first();
        return view('livewire.presensi', [
            'schedule' => $schedule
        ]);
    }
}
