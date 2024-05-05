<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MultiInput extends Component
{
    public $positions;

    public function mount()
    {
        $this->positions = [
            [
                'name' => ''
            ],
        ];
    }

    public function addPosition()
    {
        $this->positions[] = [
            'name' => ''
        ];
    }

    public function removePositionInput(int $index)
    {
        unset($this->positions[$index]);
        $this->positions = array_values($this->positions);
    }

    public function savePositions()
    {
        $this->validate(
            [
                'positions.0.name' => 'required'
            ],
            [
                'positions.0.name.required' => 'Setidaknya input pertama harus diisi'
            ]
        );
        $positions = array_filter($this->positions, function ($a) {
            return trim($a['name']) !== "";
        });

        foreach ($positions as $position) {
            $create = Category::create($position);
        }
    }

    public function render()
    {
        return view('livewire.multi-input');
    }
}
