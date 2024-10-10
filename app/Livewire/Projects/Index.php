<?php

namespace App\Livewire\Projects;

use App\Models\Project;
Use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

#[computer()]

    public function projects()
    {
        return Projects::query()->inRandomOrder()->get();
    }
}
