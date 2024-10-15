<?php

namespace App\Livewire;

use App\Models\Plane;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ListOfPlanes extends Component
{
    public Collection $planes;

    #[Computed]
    public function planesWithM()
    {
        return $this->planes->filter(function(Plane $plane) {
            return Str::contains($plane->code, 'm', true);
        });
    }

    public function render()
    {
        return view('livewire.list-of-planes');
    }
}
