<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\Validate;
class FormContact extends Component
{
    #[Validate(
        'required|min:3|max:50',
        message: [
            'required' => 'Informe o nome',
            'min' => 'O nome deve ter pelo menos :min caracteres',
            'max' => 'O nome não pode passar de :max caracteres'
        ])]
    public $name;

    #[Validate('required|email|min:5|max:50')]
    public $email;

    #[Validate('required|min:5|max:15')]
    public $phone;

    public $error = "";

    public $success = "";

    public function newContact() 
    {
        $this->validate();

        $result = Contact::firstOrCreate([
            'name' => $this->name,
            'email' => $this->email,
        ],
        [
            'phone' => $this->phone,
        ]);

        Log::info('Novo Contato: ', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        if($result->wasRecentlyCreated) {
            $this->reset();
            $this->success = "Contato criado com sucesso!";
            $this->dispatch('contactAdded');
        } else {
            $this->error = "Contato já existe!";
        }
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
