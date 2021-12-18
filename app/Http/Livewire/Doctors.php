<?php

namespace App\Http\Livewire;

use App\Models\Clinic;
use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithPagination;


class Doctors extends Component
{


    public $doctor_id;
    public $name;
    public $phone;
    public $clinic_id;
    public $shift;
    public $title;
    public $ex_fees;
    public $comment;
    public $search;
    public $updateMode = false;
    public $sort;

    use WithPagination;

    public function render()
    {
        if ($this->sort){
            $d = Doctor::whereRelation('clinics', 'name', 'like', $this->search . "%")
            ->orWhere("name", "like", $this->search . "%")
            //    ->orWhere("shift" ,"like" ,$this->search."%" )
            //    ->orWhere("title" ,"like" ,$this->search."%" )
            ->orderBy("ex_fees")->paginate(5);
        }else{
            $d = Doctor::whereRelation('clinics', 'name', 'like', $this->search . "%")
            ->orWhere("name", "like", $this->search . "%")
            //    ->orWhere("shift" ,"like" ,$this->search."%" )
            //    ->orWhere("title" ,"like" ,$this->search."%" )
            ->paginate(5);
        }
        $c = Clinic::get();
        return view('livewire.doctors', ["Doctors" => $d, "Clinics" => $c]);

        // $d = Doctor::get();
        // return view('livewire.doctors',["Doctors"=>$d]);
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->phone = '';
        $this->clinic_id = '';
        $this->shift = '';
        $this->title = '';
        $this->ex_fees = '';
        $this->comment = '';
    }

    public function store()
    {
        $this->validate([
            "name" => "required|alpha",
            "phone" => "required|numeric",
            "clinic_id" => "required",
            "shift" => "required",
            "title" => "required",
            "ex_fees" => "required|numeric",
        ]);
        $d = new Doctor();
        $d->name = $this->name;
        $d->phone = $this->phone;
        $d->clinic_id = $this->clinic_id;
        $d->shift = $this->shift;
        $d->title = $this->title;
        $d->ex_fees = $this->ex_fees;
        $d->comment = $this->comment;
        $d->save();
        $this->resetInputs();
        session()->flash('message', 'Doctor ' . $d->name . ' is Added Successfully.');
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputs();
    }

    public function edit($id)
    {
        $d = Doctor::findOrFail($id);
        $this->doctor_id = $d->id;
        $this->name = $d->name;
        $this->phone = $d->phone;
        $this->clinic_id = $d->clinic_id;
        $this->shift = $d->shift;
        $this->title = $d->title;
        $this->ex_fees = $d->ex_fees;
        $this->comment = $d->comment;
        $this->updateMode = true;
    }

    public function update($id)
    {
        $this->validate([
            "name" => "required",
            "phone" => "required",
            "clinic_id" => "required",
            "shift" => "required",
            "title" => "required",
            "ex_fees" => "required|numeric",
        ]);
        $d = Doctor::findorFail($id);
        $d->name = $this->name;
        $d->phone = $this->phone;
        $d->clinic_id = $this->clinic_id;
        $d->shift = $this->shift;
        $d->title = $this->title;
        $d->ex_fees = $this->ex_fees;
        $d->comment = $this->comment;
        $d->save();
        session()->flash('message', 'Doctor ' . $d->name . ' information is Updated Successfully.');
        $this->resetInputs();
        $this->updateMode = false;
    }

    public function destroy($id)
    {
        $d = Doctor::findorFail($id);
        $d->delete();
        session()->flash('message', 'Doctor ' . $d->name . ' is Removed Successfully.');
    }
}
