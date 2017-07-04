<?php $select = $this->view->select; ?>
<!doctype html>
<html>
    <head>
        <title>Panel Administracyjny - <?php echo $this->view->name?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href='<?php echo URL; ?>private/css/default.css'/>
    </head>
    <body>
        <div id='header'>
            
            <?php Session::init();if(Session::get('a2adebdt39$0') == true): ?>
            <div><a href="<?php echo URL; ?>adminboard/logout">Wyloguj</a></div>
            <?php endif; ?>
            <ol>
                <li><a <?php if($select == 1) { echo "id='selected'"; } ?>href="<?php echo URL; ?>adminboard/index">Aktualności</a></li>
                <li><a <?php if($select == 2) { echo "id='selected'"; } ?>href="<?php echo URL; ?>adminboard/timetable">Grafik</a></li>
                <li><a <?php if($select == 3) { echo "id='selected'"; } ?>href="<?php echo URL; ?>adminboard/settings">Ustawienia</a></li>
            </ol>
        </div>