<?php

namespace App\Livewire;

use App\Models\Crude as ModelsCrude;
use Livewire\Component;

class Crude extends Component
{

    public $nama;
    public $email;
    public $alamat;

    public function store(){
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ];
        $pesan = [
            'nama.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Format Email Tidak Sesuai',
            'alamat.required' => 'Alamat Wajib Diisi',
        ];
        
        $validated = $this->validate($rules , $pesan);
        ModelsCrude::create($validated);
        session()->flash('message','Data Berhasil Disimpan');
    }

    public function render()
    {
        return view('livewire.crude');
    }
}
