<div id='content'>
    <div id='content-top'>Aktualizuj</div>
    <div id='adminTimetable'>
        <form action='' method='post'>
            <table>
                <tr id='head'><td></td><td>Pon</td><td>Wt</td><td>Śr</td><td>Czw</td><td>Pt</td></tr>
            <?php
            $hour = ['18.00','19.00','20.00','21.00'];
            for($i = 0; $i < 4; $i++){
                echo "<tr><td id='hour'>$hour[$i]</td>";
                for($j = 0; $j < 5; $j++){
                    echo "<td>Stopień:<input type='text' name=''><br>";
                    echo "Sala:<input type='text' name=''></td>";
                }
                echo "</tr>";
            }
            ?>
            </table>
            <input type='submit' value='Zapisz'>
        </form>
    </div>
</div>