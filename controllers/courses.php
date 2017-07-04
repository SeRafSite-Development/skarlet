<?php

class Courses extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Kursy';
        $this->view->render('courses/index');
    }
}
