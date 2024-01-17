<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Dasboard extends Component
{

    public function mount()
    {

    }

    public function render()
    {
        $user = User::where('id', session('user'))->first();

        return view('livewire.user.dasboard')->with('user', $user);
    }
}
