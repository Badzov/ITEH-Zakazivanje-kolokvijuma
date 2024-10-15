<?php 

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST["predmet"]) && isset($_POST["katedra"]) && isset($_POST["sala"]) && isset($_POST["datum"]) && isset($_POST["id_predmeta"])) {

    $prijava = new Prijava($_POST["id_predmeta"], $_POST["predmet"], $_POST["katedra"], $_POST["sala"], $_POST["datum"]);
    $status = Prijava::update($prijava, $conn);
    if($status) {
        echo "Success";
    } else {
        echo $status;
        echo "Failed";
    }
}

?>