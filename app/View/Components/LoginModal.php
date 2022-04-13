<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginModal extends Component
{


    public $name;
    public $users;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name , $users)
    {

        $this->name = $name;
        $this->users = $users;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.login-modal');
    }
}
