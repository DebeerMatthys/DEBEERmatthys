<?php
$query = 'select * from p_ville';
$result = $cnx-> query($query);

$data = $result->fetchAll();
//var_dump($data);
$nbr=count($data);
for ($i=0;$i<$nbr;$i++){
    print "<br>".$i." .".$data[$i]['nom_ville']." (".$data[$i]['code_postal'].")";
}
print 'coucou';