<?php

namespace App\Livewire\Profile;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;

class CompleteProfile extends Component
{
    public $user;
    public int $currentStep = 1;
    public string $gender = "";
    public string $tagName = '';
    public string $bio = '';
    public bool $profileCompleted = false;
    public string $trainerId;
    public $trainer;

    protected $rules = [
        'gender' => 'required',
        'tagName' => 'required',
        'bio' => 'required',
        'trainerId' => 'required|exists:users,user_reference'
    ];

    public function mount()
    {
        $this->user = auth()->user();
        //Verify if a profile exist
        $this->profileCompleted = Profile::where('user_id', $this->user->id)->exists();
    }

    public function nextStep()
    {
        # in the first step whe have to validate the data.
        if ($this->currentStep === 1) {
            $this->validate([
                'gender' => 'required'
            ]);
        }

        # In this step we have to validate that plate have the correct value, if not assigned for the user the sistem have to assign it automaticly.
        if ($this->currentStep === 2 && $this->tagName === "") {
            $this->tagName = $this->gender." ".$this->user->last_name;
        }

        if ($this->currentStep === 3) {
            $this->validate([
                'bio' => 'required'
            ]);
        }

        if ($this->currentStep === 4) {
            $this->validate([
                'trainerId'=>'required|exists:users,user_reference',
            ]);
            $this->trainer = $this->getTrainer();
        }

        if ($this->currentStep === 5) {
        }
        
        //$this->saveMissionaryProfile();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function saveMissionaryProfile()
    {
        Profile::create([
            'user_id' => $this->user->id,
            'bio' => $this->bio,
            'missionary_gender' => strtolower($this->gender),
            'tagName' => $this->tagName
        ]);

        $this->profileCompleted = true;
    }

    public function getTrainer()
    {
        return User::where('user_reference', $this->trainerId)->with('mission')->first();
    }

    public function render()
    {
        return view('livewire.profile.complete-profile');
    }
}
