<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Signup extends Component
{
    #[Rule('string|required|max:20')]
    public $name;

    #[Rule('email|required')]
    public $email;

    #[Rule('string|required|min:8')]
    public $password;

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->name,

        ]);

        session()->flash('message', 'Account Created Successfully');

        return $this->redirect(route('user.login'));
    }
    public function render()
    {
        return view('livewire.user.signup');
    }
}
