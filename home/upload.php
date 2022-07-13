<?php
// var_dump($_FILES);
if (isset($_POST['remover'])){
    unlink($_POST['remover']);
    header('Location:../home');
}else if ($_FILES) {
    $dirUpload = "../users/$_SESSION[id]";
    $file = $_FILES["arquivo"];
    if ($file["error"]) {
        echo "Falha ao detectar arquivo";
}else{
if (!is_dir($dirUpload)) {
    mkdir($dirUpload);
}

if (move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])) {
    echo "Upload realizado com sucesso";
    header('Location:../home');
} else {
    throw new Exception("Não foi possível realizar o upload");
}}
}


?>