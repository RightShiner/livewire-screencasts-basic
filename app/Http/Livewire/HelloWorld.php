<?php

namespace App\Http\Livewire;
use App\Contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;

    public function mount() {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}