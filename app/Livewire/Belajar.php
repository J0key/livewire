<?php

namespace App\Livewire;

use Livewire\Component;

class Belajar extends Component
{

    public $nama="Shyra";
    public $jenisKelamin="Perempuan";
    public $password = "123456";
    public $showPassword = false;
    public $cart = 0;

    public function render()
    {
        return view('livewire.belajar');
    }

    public function plus()
    {
        $this->cart = $this->cart + 1;
    }
    public function minus()
    {
        if ($this->cart > 0){
        $this->cart = $this->cart - 1;
        }
        else{
        $this->cart = 0;
        }
    }
}

