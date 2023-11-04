<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserCreate extends Component
{
    public $name;
    public $email ;
    public $password ;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        $this->validate([
            'name'=> 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
 
        User::create([
            'name'=> $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        session()->flash('success', 'User Berhasil Dibuat');
    }
}
