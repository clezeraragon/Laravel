<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 23/10/2014
 * Time: 10:03
 */

namespace Admin;

use View;


class IndexController extends BaseController
{


    function getIndex()
    {

        $this->layout->content = View::make('admin.index');
    }

} 