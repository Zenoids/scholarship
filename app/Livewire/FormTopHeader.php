<?php

namespace App\Livewire;

use Livewire\Component;

class FormTopHeader extends Component
{
    public function render()
    {
        $user=auth()->user();
        return view('livewire.form-top-header',['user'=>$user]);
    }
}
