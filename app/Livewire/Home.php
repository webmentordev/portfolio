<?php

namespace App\Livewire;

use App\Models\Qualification;
use App\Models\Stack;
use App\Models\Tech;
use App\Models\Work;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public $date;

    public function mount(){
        $startDate = Carbon::create(2021, 3, 1);
        $yearsDifference = abs(Carbon::now()->diffInYears($startDate));
        $this->date = number_format($yearsDifference, 1);
    }

    public function render()
    {
        return view('livewire.home', [
            'techs' => Tech::latest()->get(),
            'stacks' => Stack::latest()->get(),
            'works' => Work::orderBy('order', 'desc')->get(),
            'quanlifications' => Qualification::latest()->get()
        ]);
    }
}