<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.projects', [
            'projects' => Project::orderBy('order', 'asc')->where('is_active', true)->get()
        ]);
    }
}