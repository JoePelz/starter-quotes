<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        $this->render();
    }
}