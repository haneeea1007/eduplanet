<?php

    include_once $_SERVER["DOCUMENT_ROOT"]."/eduplanet/lib/session_start.php";

    $user_no = $am_no;

    include_once $_SERVER["DOCUMENT_ROOT"]."/eduplanet/lib/db_connector.php";

    $pw1 = $_POST["pw1"];
    $email = $_POST["email"];
    $acd_name = $_POST["acd_name"];
    $rprsn = $_POST["rprsn"];

    $sql = "UPDATE a_members SET pw='$pw1', email='$email', acd_name='$acd_name', rprsn='$rprsn' WHERE no=$user_no";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo "
        <script>
            alert('내 정보 수정이 완료되었습니다.');
            location.href = '/eduplanet/mypage/am_myinfo.php';
        </script>
    ";

?>