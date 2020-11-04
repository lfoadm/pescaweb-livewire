<?php

namespace App\Http\Livewire;

use App\Models\Fish;
use Livewire\Component;

class ShowFishes extends Component
{
    public $content = 'Apenas um teste';

    public function render()
    {
        $fishes = Fish::with('user')->get();
        return view('livewire.show-fishes', [
            'fishes' => $fishes
        ]);
    }

    public function create()
    {
        Fish::create([
            'content' => $this->content,
            'user_id' => 1,
        ]);

        $this->content = '';

    }
}
