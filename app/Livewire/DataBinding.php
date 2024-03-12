<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataBinding extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $password;

    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.data-binding', [
            'users' => User::simplePaginate(10)
        ]);
    }
}
