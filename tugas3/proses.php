<?php
$domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang","Bekasi"];

$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital",
];

$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "Javascript"=>20,
    "PHP"=>30,
    "python"=>30,
];
function grade($nilai){
    if ($nilai >= 150){
        return "Sangat Baik";
    }elseif ($nilai >= 60){
        return "Baik";
    }elseif ($nilai >= 40){
        return "Cukup";
    }elseif ($nilai >= 0){
        return "Kurang";
    }else{
        return "0(Tidak Memadai)";
    }
}
?>
