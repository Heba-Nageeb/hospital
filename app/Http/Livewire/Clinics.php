<?php

namespace App\Http\Livewire;

use App\Models\Clinic;
use Livewire\Component;
use Livewire\WithPagination;


class Clinics extends Component
{
    public $clinic_id;
    public $name;
    public $comment;
    public $search;
    public $updateMode = false;
    use WithPagination;

    public function render()
    {
        // $c = Clinic::where("name" ,"like" ,$this->search."%" )->get();
        // return view('livewire.clinics',["Clinics"=>$c]);

        $c = Clinic::where("name", "like", $this->search . "%")->paginate(5);
        return view('livewire.clinics', ["Clinics" => $c]);
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->comment = '';
    }

    public function store()
    {
        $this->validate([
            "name" => "required|alpha"
        ]);
        $c = new Clinic();
        $c->name = $this->name;
        $c->comment = $this->comment;
        $c->save();
        $this->resetInputs();
        session()->flash('message', $c->name . ' Clinic is Added Successfully.');
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputs();
    }

    public function edit($id)
    {
        $c = Clinic::findOrFail($id);
        $this->clinic_id = $c->id;
        $this->name = $c->name;
        $this->comment = $c->comment;
        $this->updateMode = true;
    }

    public function update($id)
    {
        $this->validate([
            "name" => "required|alpha"
        ]);
        $c = Clinic::findorFail($id);
        $c->name = $this->name;
        $c->comment = $this->comment;
        $c->save();
        session()->flash('message', 'Clinic is Updated Successfully.');
        $this->resetInputs();
        $this->updateMode = false;
    }

    public function destroy($id)
    {
        $c = Clinic::findorFail($id);
        $c->delete();
        session()->flash('message', $c->name . ' Clinic is Deleted Successfully.');
    }
}
