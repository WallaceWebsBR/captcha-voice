<?php
$validar = $_REQUEST['captcha'];
if($validar == "inteligência"){
    echo "<script>alert('Palavra validada com sucesso!')</script>";
    echo "<script>console.log('Palavra validada com sucesso!')</script>";
    echo "<script>window.history.go(-1)</script>";
} else {
    echo "<script>alert('Captcha Errado!')</script>";
    echo "<script>console.log('Captcha Errado!')</script>";
    echo "<script>window.history.go(-1)</script>";
}
?>
