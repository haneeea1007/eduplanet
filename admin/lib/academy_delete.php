<?php
    // session_start();
    // $is_admin = isset($_SESSION["admin"])? $_SESSION["admin"]: 0 ;

    // if ( $is_admin != 1 ){
    //     echo("
    //         <script>
    //         alert('관리자 전용 페이지 입니다.');
    //         history.go(-1)
    //         </script>
    //     ");
    //     exit;
    // }

    $no   = $_POST['no'];

    include_once '../../lib/db_connector.php';

    for($i = 0; $i < count($no); $i++){

        $n = $no[$i];
        $sql = "DELETE FROM academy WHERE no = $n;";

        if(!mysqli_query($conn, $sql)){
            echo "0";
            die;
        };
    
    }

    mysqli_close($conn);
    
    echo "1";

?>
