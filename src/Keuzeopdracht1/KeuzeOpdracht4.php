<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hicham.h
 * Date: 26-3-2019
 * Time: 20:23
 */



$apks = array(
    array('DT-LT-87' , 'Citroen' , 'XM' , '1990-09-23', '34500' ),
    array('GF-NX-07' , 'Volkswagen' , 'Polo', '1999-07-12', '78000' ),
    array('GF-PD-34', 'Volkswagen' , 'Golf', '1999-09-23', '57500' ),
    array('KR-RT-65' , 'Volkswagen' , 'Polo', '1999-08-08', '42000' ),
    array('PT-ER-45' , 'Ford' , 'Fiesta', '1999-08-08', '25000' ),
    array('TT-PR-73' , 'Citroen' , 'XM', '1999-03-02', '1200' ),
    array('TT-RW-01' , 'Volkswagen' , 'Polo', '1999-11-14', '4500' )
);

echo '<table border="1">';
echo '<tr><th>Kenteken</th><th>Merk</th><th>Type</th><th>DatumAPK</th><th>Kilometerstand</th></tr>';
foreach( $apks as $apk )
{
    echo '<tr>';
    foreach( $apk as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

