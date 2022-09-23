<?php
$n=intval($_POST['n']);
echo '<table>';
for($i=0; $i<$n; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $n; $j++) {
        $R = mt_rand(0, 255);
        $G = mt_rand(0, 255);
        $B = mt_rand(0, 255);
        echo "<td style='width: 50px;
                 height: 50px; 
                 background-color:rgb($R,$G,$B);' ></td>";

    }
    echo '</tr>';
}
echo '</table>';
