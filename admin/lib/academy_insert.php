<?php

    $no   = $_POST['no'];

    include_once $_SERVER['DOCUMENT_ROOT'] . "/eduplanet/lib/db_connector.php";

    for($i = 0; $i < count($no); $i++){

        $n = $no[$i];
        $sql = "INSERT INTO academy (si_name, dong_name, sector, acd_name, rprsn, class, tel, address) 
        (SELECT si_name, dong_name, sector, acd_name, rprsn, class, tel, address FROM academy_temp WHERE no = $n)";

        mysqli_query($conn, $sql);

        //$sql = "DELETE FROM academy_temp WHERE no = $n";
        //mysqli_query($conn, $sql);
    
    }

    mysqli_close($conn);
    
    echo "1";

?>

