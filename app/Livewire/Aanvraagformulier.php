<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\FormRegistration;

class Aanvraagformulier extends Component
{

    #[Validate('required', message: 'Voornaam is verplicht')]
    #[Validate('alpha', message: 'Voornaam mag alleen letters bevatten')]
    public $firstname;
    #[Validate('required', message: 'Achternaam is verplicht')]
    #[Validate('alpha', message: 'Achternaam mag alleen letters bevatten')]
    public $lastname;
    #[Validate('required', message: 'Geboortedatum is verplicht')]
    #[Validate('date', message: 'Geboortedatum moet een datum zijn')]
    public $dob;

    public $currentstage = 'start';
    public function render()
    {
        return view('livewire.aanvraagformulier');
    }

    public function store(){
        $this->validate();
        try{
            FormRegistration::create([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'dob' => $this->dob,
            ]);
            $this->currentstage = 'success';

        }
        catch(\Exception $e){
            dd($e);
            $this->currentstage = 'error';

        }
    }

    public function backToStart(){
        $this->currentstage = 'start';
        $this->dob = null;
        $this->firstname = null;
        $this->lastname = null;
    }
}
