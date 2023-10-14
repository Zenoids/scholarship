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
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
    }
}
