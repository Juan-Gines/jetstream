<?php

namespace App\View\Components;

use Illuminate\View\Component;

/* Esta es la clase del componente que renderiza la plantilla de la aplicación
    Notese que usamos la convención camelcase cada palabra que usemos deberá comenzar en mayúscula y sin separación para identificar la clase
*/

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
