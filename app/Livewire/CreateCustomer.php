<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name='';
    public $email='';
    public $phone='';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated=$this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers|max:255',
            'phone' => 'required|unique:customers|max:255'
        ]);

        session()->flash('success','Customer Data Created!');
        Customer::create($validated);
        $this->reset();
    }
}
