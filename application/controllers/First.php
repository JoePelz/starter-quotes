<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {
    
    function __construct()
    {
            parent::__construct();
    }

    function index()
    {		
                $this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$record = $this->quotes->first();
                
		$this->data = array_merge($this->data, $record);

		$this->render();
    }
    
    /**
     * Returns a page displaying a single quotation.
     * @param integer $which The number of the quote to return.
     */
    function gimme($which)
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // pull out the specific quote requested
        $record = $this->quotes->get($which);

        $this->data = array_merge($this->data, $record);

        $this->render();
    }
   
}