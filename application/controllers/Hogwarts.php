<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'],
                                            'mug' => $record['mug'],
                                            'href' => $record['where']                                            
                                            );
		}
		$this->data['authors'] = $authors;

		$this->render();
	}
        
        public function shucks(){
            
            // this is the view we want shown
            $this->data['pagebody'] = 'justone';
            
            $this->data = array_merge($this->data, $this->quotes->get(2));

            $this->render();
        }

        public function random() {

            $this->data['pagebody'] = 'justone';
            $rand_keys = rand(0, 5);

            // build the list of authors, to pass on to our view
            $source = $this->quotes->get($rand_keys);
            $this->data = array_merge($this->data, $source);
            $this->render();


        }


}
