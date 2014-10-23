<?php namespace Admin;

use View; # Temos que chamar a View para ele encontrar o objeto para a classe admin

class BaseController extends \Controller {


    protected  $layout = 'layouts.Admin'; # Aqui ele seta o layout definido seguindo para o Admin

    /**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

}
