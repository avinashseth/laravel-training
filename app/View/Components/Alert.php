<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private $type;
    private $message;


    public function __construct($alerttype, $message)
    {
        $this->type = $alerttype;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert', ['type' => $this->type, 'message' => $this->message]);
    }
}
