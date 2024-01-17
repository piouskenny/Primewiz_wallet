<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('email|required')]
    public $email;

    #[Rule('string|required|min:8')]
    public $password;

    public function check()
    {
        $this->validate();

        if (Auth::attemot(['email' => $this->email, 'password' => $this->password])) {
            session(['user' => Auth::user()]);

            session()->flash('message', 'Login successful');

            return $this->redirect(route('user.dashboard'));
        } else {
            session()->flash('message', 'Incorrect user details');

            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
