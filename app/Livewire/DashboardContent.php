<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardContent extends Component
{
    public $component = 'CreateRooms'; // Default component

    protected $listeners = ['changeComponent'];

    public function render()
    {
        // Pass the current component name to the Livewire view
        return view('livewire.dashboard-content', [
            'component' => $this->component,
        ]);
    }

    public function changeComponent($component)
    {
        // Update the current component based on the emitted event
        $this->component = $component;
    }
}
