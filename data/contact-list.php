<?php
$contact_list=array(
array(
    'name' => 'Scott',
    'email' => 'scot@ukr.net',
    'img' => 'http://localhost/tel-server/img/1.png'
),
array(
    'name' => 'Vasia',
    'email' => 'vasia@ukr.net',
    'img' => 'http://localhost/tel-server/img/2.png'
),
array(
    'name' => 'petia-gopnik',
    'email' => 'petia@ukr.net',
    'img' => 'http://localhost/tel-server/img/3.png'
),
);

print_r(json_encode($contact_list));
?>