<?php
include 'database.php';
$menorMultiplo = $_POST['menorMultiplo'];
$mayorMultiplo = $_POST['mayorMultiplo'];
$rondas = $_POST['rondas'];
$porcBuenas = $_POST['porcBuenas'];
$porcMalas = $_POST['porcMalas'];
$setMemoria = $_POST['setMemoria'];
$min_vel = $_POST['min_vel'];
$max_vel = $_POST['max_vel'];
$acel = $_POST['acel'];
$grupo = $_POST['grupo'];

$nro = $mayorMultiplo-$menorMultiplo+1;

if($max_vel<=$min_vel){
    $Message = urlencode("Máxima velocidad debe ser mayor a la mínima.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

if($mayorMultiplo<=$menorMultiplo){
    $Message = urlencode("Mayor múltiplo debe ser mayor a menor múltiplo.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

if($nro%2!=0){
    $Message = urlencode("Cantidad de números debe ser par.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

if($porcBuenas<0 || $porcBuenas>100){
    $Message = urlencode("Porcentaje de buenas debe ser mayor a cero y menor a cien.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

if($porcMalas<0 || $porcMalas>100){
    $Message = urlencode("Porcentaje de malas debe ser mayor a cero y menor a cien.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

if($setMemoria<0){
    $Message = urlencode("Set en el que se activa la memoria debe ser mayor a cero.");
    header("Location: config.php?Message=".$Message."&grupo=".$grupo);
    die;
}

$porcBuenas = $porcBuenas/100;
$porcMalas = $porcMalas/100;
$min_vel = $min_vel*-1;
$max_vel = $max_vel*-1;

$ronda = explode("-", $rondas);
$i=1;
foreach($ronda as $r){
    $rr=str_replace("{", "", $r);
    $rrr=str_replace("}", "", $rr);
    $numero = explode(",", $rrr);
    $acum=0;
    foreach($numero as $n){
        $acum=$acum+intval($n);
    }
    if($acum!=$nro){
        $Message = urlencode("Ronda " . $i . " debe sumar " . $nro . " y suma " . $acum);
        header("Location: config.php?Message=".$Message."&grupo=".$grupo);
        die;
    }
    $i++;
}
$conexion = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}
if($grupo==0) {
    $sql = "UPDATE parametros_con
        SET menorMultiplo='$menorMultiplo', mayorMultiplo='$mayorMultiplo', rondas='$rondas', porcBuenas='$porcBuenas', porcMalas='$porcMalas', setMemoria='$setMemoria', min_vel='$min_vel', max_vel='$max_vel', acel='$acel'";
}
if($grupo==1){
    $sql = "UPDATE parametros_exp
        SET menorMultiplo='$menorMultiplo', mayorMultiplo='$mayorMultiplo', rondas='$rondas', porcBuenas='$porcBuenas', porcMalas='$porcMalas', setMemoria='$setMemoria', min_vel='$min_vel', max_vel='$max_vel', acel='$acel'";

}
if ($conexion->query($sql) === TRUE) {
} 
mysqli_close($conexion); 

$Message = urlencode("Actualizado con éxito.");
header("Location: config.php?Message=".$Message."&grupo=".$grupo);
exit();
?>