<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Dasboard extends Component
{

    public $greetings;

    public function mount()
    {
        $this->setGreeting();
    }

    public function setGreeting()
    {
        $currentTime = now();

        if($currentTime->hour < 12) {
            $this->greetings  = 'Good Morning!';
        } elseif($currentTime->hour < 12) {
            $this->greetings  = 'Good Afternoon!';
        } else{
            $this->greetings  = 'Good Evening!';
        }

    }
    public function render()
    {
        $user = User::where('id', session('user'))->first();

        return view('livewire.user.dasboard')->with('user', $user);
    }
}
