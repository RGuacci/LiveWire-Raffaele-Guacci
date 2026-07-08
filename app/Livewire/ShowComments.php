<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowComments extends Component
{
    public function render()
    {  
     $messages = Message::select('name','id')->get();
     

        return view('livewire.show-comments',compact('messages'));
    }
     
       #[On('message-created')]
         public function refreshMessages()
        {
    //
}

    public function delete($id)
    {   
        $message = Message::find($id);
        $message->delete();
    }
}
