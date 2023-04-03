<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Lars";

    public function mount($name)
    {
        $this->name = $name;
    }

    public function updated($name)
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}