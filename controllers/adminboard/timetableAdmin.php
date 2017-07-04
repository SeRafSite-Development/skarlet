<?php
class TimetableAdmin extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->select = 2;
        $this->view->name = 'Grafik';
        require 'views/adminboard/header.php';
        $this->view->data = $this->model->getTimetable();
        $this->view->render('adminboard/timetable/index', false);
        require 'views/adminboard/footer.php';
    }
    
}
