<?php
include('Rest.php');

$coba = new Rest();

$coba->getWisata();
/*
$data = array(
    'kota' => 'kota1',
    'landmark' => 'landmark1',
    'tarif' => '1jt'
);
$coba->insertWisata($data);

*/
$data = array(
    'id' => '4',
    'kota' => 'kota2',
    'landmark' => 'landmark2',
    'tarif' => '2jt'
);
$coba->updateWisata($data);

//ujicoba hapus data
$coba->deleteWisata(4);
?>