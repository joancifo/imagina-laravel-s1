<?php

namespace App\Livewire;

use App\Models\Plane;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TopPlanes extends Component
{
    public Collection $planes;

    #[Validate('required|string|unique:planes,code')]
    public string $newCode;

    public int $counter = 0;

    public function subOne()
    {
        $this->counter--;
    }

    public function addOne()
    {
        $this->counter++;
    }

    public function handleSubmit()
    {
        $this->validate();

        $plane = Plane::create([
            'code' => $this->newCode
        ]);

        $this->planes->push($plane);
    }

    public function mount()
    {
        $this->planes = Plane::query()
            ->withCount('flights')
            ->where(function (Builder $query) {
                $query
                    ->whereLike('code', '%a%')
                    ->orWhereLike('code', '%n%');
            })
            ->has('flights')
            ->get();

//        $this->planes = Plane::query()
//            ->join('flights', 'plane_id', 'flights.id')
//            ->get();
    }
}
