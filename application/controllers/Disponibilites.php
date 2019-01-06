<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disponibilites extends CI_Controller {

    public function index()
    {
        $this->slice->view('disponibilites/disponibilites');
    }

}

/* End of file Controllername.php */
