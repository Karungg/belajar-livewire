<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ClickNewUser extends Component
{
    public $username = "Miftah Fadilah";

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
