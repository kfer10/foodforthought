<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contact Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->layout(false);
    }

}
