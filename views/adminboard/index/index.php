<div id="content">
    <div id="content-top">Obecnie widoczne</div>
    
    <table>
        <tr id="section"><td>Data</td><td>Treść</td><td></td></tr>
    <?php
    $data = $this->data;
    foreach($data as $row){
        echo '<tr>'."<td id='date'>".$row['date'].'</td>';
        echo '<td><p>'.$row['name'].'</p>'.$row['content'].'</td>';
        echo '<td><a href="'.URL.'adminboard/index/delete?id='.$row['newsid'].'">Usuń</a></td></tr>';
    }
    ?>
    </table>
    
    <h3>Dodaj nową</h3>
    
    <div id='addMessage'>
        <form action="<?php echo URL; ?>adminboard/index/action" method="post">
            <table>
                <tr>
                    <td>Nazwa:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Treść:</td>
                    <td><textarea class="area" name="content" rows="10"cols="40"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Dodaj"></td>
                </tr>
            </table>
        </form>
    </div>
</div>