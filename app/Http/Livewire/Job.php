<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{
    /*addLike cette fonction permet d'enregistrer
     le client et le job liké dans la table pivot
      job_user */
    public $job;
    public function addLike(){
        auth()->user()->likes()->toggle($this->job->id);
    }

    public function render()
    {
        return view('livewire.job');
    }
}
