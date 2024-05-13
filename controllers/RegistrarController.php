<?php
$firestoreDB = new FirestoreDB();
$user = new DefaultUser($_POST['userName'], $_POST['firstName'],$_POST['lastName'], null, $_POST['email'],null , $_POST['password'], null, null, null, null, null);
$data = $user->getData();
$rpta = $firestoreDB->addUser($data);
if ($rpta) {
    // $data = $firestoreDB->getUserLogin($_POST["name"], $_POST["password"]);
    $_SESSION["user"] = $user;
    $_SESSION["data"] = $data;
    // header('Location: main');
    echo "Datos guardados";
}
else {
    // header('Location: login');
    echo "nya";
}