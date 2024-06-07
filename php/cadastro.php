<?php
    // database connection code
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

    $con = mysqli_connect('localhost', 'root', '','db_contact');

    // get the post records
    $edNome = $_POST['ed_nome'];
    $edEmail = $_POST['ed_email'];
    $edPsw = $_POST['ed_psw'];
    $cbEstados = $_POST['cb_estados'];
    $edFoto = $_POST['ed_foto'];
    $edUrl = $_POST['ed_url'];
    $txtComentarios = $_POST['txt_comentarios'];

    // database insert SQL code
    $sql = "INSERT INTO `tbl_contact` (`id`, `nome`, `email`, `senha`, `estado`, `foto`, `url`, `comentarios`)
            VALUES ('$edNome', '$edEmail', '$edPsw', '$cbEstados', '$edFoto', '$edUrl', '$txtComentarios')";

    // insert in database
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
    } else {
        echo "Ocorreu um erro";
    }
?>