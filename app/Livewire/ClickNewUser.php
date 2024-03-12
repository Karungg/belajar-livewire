<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ClickNewUser extends Component
{
    public function createNewUser()
    {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password')
        ]);
    }

    public function render()
    {
        return view('livewire.click-new-user', [
            'users' => User::count()
        ]);
    }
}
