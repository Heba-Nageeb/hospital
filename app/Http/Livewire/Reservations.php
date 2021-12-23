<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;
use Livewire\WithPagination;

class Reservations extends Component
{
    // public $doctor_id;
    // public $name;
    // public $phone;
    // public $clinic_id;
    // public $shift;
    // public $title;
    // public $ex_fees;
    // public $comment;
    public $search;
    // public $updateMode = false;

    use WithPagination;

    public function render()
    {
            $r = Reservation::orWhereRelation('doctors', 'name', 'like', $this->search . "%")
            ->orWhereRelation('users', 'name', 'like', $this->search . "%")
            ->orWhere("name", "like", $this->search . "%")
            ->paginate(5);

        // $c = Clinic::get();
        // $r = Reservation::get();
        return view('livewire.reservations', ["Reservations" => $r]);
    }

    
}
