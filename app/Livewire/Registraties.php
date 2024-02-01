<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\FormRegistration;

class Registraties extends Component
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
    public $rowid;
    public $rows;

    public $currentstage = 'start';

    public function render()
    {
        $this->rows = FormRegistration::all();
        return view('livewire.registraties');
    }


    public function edit($id){
        $this->rowid = $id;
        $row = FormRegistration::find($id);

        $this->firstname = $row->firstname;
        $this->lastname = $row->lastname;
        $this->dob = $row->dob;
        $this->currentstage = 'edit';
    }

    public function delete($id){
        // remove from database
        FormRegistration::destroy($id);

    }


    public function update(){
        $row = FormRegistration::find($this->rowid);
        $row->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'dob' => $this->dob,
        ]);
        $this->currentstage = 'start';

    }
}
