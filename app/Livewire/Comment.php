<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class Comment extends Component
{ 
 
     public $name;
     public $body;
     
    public function save()
    {
        $this->validate([
       
        'name' => 'required',
        'body' => 'required'  
        ]);

        Message::create([
        'name' => $this -> name,
        'body' =>$this -> body
       ]);

       $this->reset();
       $this->dispatch('message-created');

    }



    public function render()
    {
        return view('livewire.comment');
    }
}
