<?php

namespace App\Http\Livewire;

use App\Entities\Option as EntitiesOption;
use Livewire\Component;

class Option extends Component
{
    // protected $repository;
    // public function __construct(OptionRepository $repository)
    // {
    //     $this->repository = $repository;
    //     $this->entity     = $repository->getEntity();

    // }
    public $options;

    public function render()
    {

        // $option = $this->entity->get();

        return view('livewire.option', [
            'option' => EntitiesOption::all(),
        ]);
    }

    public function delete()
    {
        $this->options->delete();
    }

}
