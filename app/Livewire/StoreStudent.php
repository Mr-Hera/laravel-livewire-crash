<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreStudent extends Component
{
    use WithFileUploads;
    public $name, $email, $image, $student;

    public function saveData() {
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $imageName = $this->image->store('photos', 'public');
        $student->image = $imageName;

        $student->save();

        $this->resetData();
    }

    public function resetData() {
        $this->reset(['name', 'email', 'image']);
    }

    public function mount() {
        $this->student = Student::all();
    }

    public function render()
    {
        return view('livewire.store-student');
    }
}
