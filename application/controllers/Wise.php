<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{


    public function bingo()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $this->data = array_merge($this->data, $this->quotes->get(6));
        $this->render();

    }

}