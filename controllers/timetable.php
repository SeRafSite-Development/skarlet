<?php

class Timetable extends Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        $this->view->title = 'Grafik';
        $this->view->render('timetable/index');
    }
}
