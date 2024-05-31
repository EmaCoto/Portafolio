<?php

namespace App\Livewire\Contact;

use Livewire\Component;

class ContactMe extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.contact.contact-me');
    }
}
