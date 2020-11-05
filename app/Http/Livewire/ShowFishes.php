<?php

namespace App\Http\Livewire;

use App\Models\Fish;
use Livewire\Component;
use Livewire\WithPagination;

class ShowFishes extends Component
{
    use WithPagination;

    public $content = 'Apenas um teste';

    protected $rules = [
        'content' => 'required|min:3|max:255',
    ];
    public function render()
    {
        $fishes = Fish::with('user')->latest()->paginate(8);
        return view('livewire.show-fishes', [
            'fishes' => $fishes
        ]);
    }

    public function create()
    {
        $this->validate();

        /* Fish::create([
            'content' => $this->content,
            'user_id' => 1,
        ]); */

        auth()->user()->fishes()->create([
            'content' => $this->content,
        ]);


        $this->content = '';

    }
}
