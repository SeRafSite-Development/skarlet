<?php

class TimetableAdminModel extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    function getTimetable(){
        $sth = $this->db->prepare("SELECT * FROM timetable");
        $sth->execute(array());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}