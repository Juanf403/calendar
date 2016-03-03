<?php 
include 'db.php';
if (isset($_POST['title'])) {
    # code...
    $title       = mysql_real_escape_string($_POST['title']);
    $star        = mysql_real_escape_string($_POST['star']);
    $end         = mysql_real_escape_string($_POST['end']);
    $para        = mysql_real_escape_string($_POST['para']);
    $descripcion = mysql_real_escape_string($_POST['descripcion']);

    if (mysql_db_query("INSERT INTO envenement SET title='".$title."','".$star."','".$end."'")) {
        $errorMsg = '<div class = "alert alert-success">
        <i class ="fa fa-check"></i>Evento Agregado Correctamente </div>';
        $errorMsg = "INSERT INTO envenement SET title='".$title."','".$star."','".$end."'";
    }else{
        $errorMsg = '<div class= "alert alert-danger" >
        <i class = "fa fa-times"></i>Error, intenta nuevamente.
        </div>';
    }
}
 ?>