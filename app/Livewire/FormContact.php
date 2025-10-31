<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class FormContact extends Component
{

    public $name, $email, $phone;

    public function newContact() 
    {
        $this->validate(
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|min:5|max:50',
                'phone' => 'required|min:5|max:15',
            ],
            [
                'name.required' => 'Informe o seu nome',
                'name.min' => 'O nome precisa ter pelo menos :min caracteres',
                'name.max' => 'O nome não pode passar de :max caracteres',

                'email.required' => 'O e-mail é obrigatório',
                'email.email' => 'Informe um e-mail válido',
                'email.min' => 'O e-mail precisa ter pelo menos :min caracteres',
                'email.max' => 'O e-mail não pode passar de :max caracteres',

                'phone.required' => 'O telefone é obrigatório',
                'phone.min' => 'O telefone precisa ter pelo menos :min caracteres',
                'phone.max' => 'O telefone não pode passar de :max caracteres',
            ]
        );

        Log::info('Novo Contato: ', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
