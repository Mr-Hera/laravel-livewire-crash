<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreStudent extends Component
{
    use WithFileUploads;
    public $name, $email, $image, $student, $s_id, $update=false, $imageUp;

    public function saveData() {
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $imageName = $this->image->store('photos', 'public');
        $student->image = $imageName;

        $student->save();

        $this->resetData();
        $this->mount();
    }

    public function upData() {
        $data = Student::find($this->s_id);
        $data->name = $this->name;
        $data->email = $this->email;

        if($this->imageUp) {
            $imageName = $this->imageUp->store('photos', 'public');
            $data->image = $imageName;
        }

        $data->save();
        $this->update = false;

        $this->resetData();
        $this->mount();
    }

    public function resetData() {
        $this->reset(['name', 'email', 'image']);
    }

    public function mount() {
        $this->student = Student::all();
    }

    public function updateStudent($id) {
        $student = Student::find($id);

        $this->s_id = $student->id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->image = $student->image;
        $this->update = true;
    }

    public function deleteStudent($id) {
        $data = Student::find($id);
        $data->delete();

        $this->mount();
    }

    public function render()
    {
        return view('livewire.store-student');
    }
}
