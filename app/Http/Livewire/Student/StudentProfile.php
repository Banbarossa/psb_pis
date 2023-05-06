<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class StudentProfile extends Component
{

    public $showSuccesNotification  = false;

    public $showDemoNotification = false;

    public $currentStep =2;

    public $progress = 'w-25';

    protected $listeners =['changeStep'=>'changeStep'];

    


    public function render()
    {
        return view('livewire.student.student-profile');
    }


    public function mount(){
        if ($this->currentStep == 1){
            $this->progress ='w-25';
        } elseif($this->currentStep == 2){
            $this->progress ='w-50';
        } else{
            $this->progress ='w-100';
        }
    }

    public function changeStep(){

        $this->currentStep = $this->currentStep - 1;
    }
}
