<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    //Las propiedades que pasemos por el constructor se pueden utilizar en el componente
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color='green')
    {
        $this->color=$color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    //Una de las ventajas de los componentes de clase es que podemos pasarle métodos

    public function mensaje(){
        switch($this->color){
            case 'blue':
                return 'Esta es una alerta de información.';
                break;
            case 'green':
                return 'Esta es una alerta de correcto.';
                break;
            case 'red':
                return 'Esta es una alerta de peligro.';
                break;
            case 'yellow':
                return 'Esta es una alerta de advertencia.';
                break;
        }
    }
}
