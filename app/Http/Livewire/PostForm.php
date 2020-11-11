<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{
    public $title; 
    public $content;
    
    // public function hydrate()
    // {
    //     $this->validate([
    //         'title'=>'required',
    //         'content'=>'required',
    //     ]);
    // }
    public function save()
    {
        $data = [
            'title' => $this->title,
            'content' => $this->content, 
            'user_id' => auth()->user()->id,
        ];
        Post::create($data);
        $this->emit('refreshParent');
        $this->resetVars();
        $this->dispatchBrowserEvent('close-modal');
    }

    private function resetVars(){

        $this->title = null;
        $this->content = null;

    }
    public function render()
    {
        return view('livewire.post-form');
    }
}
