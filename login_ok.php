<?php

    $id = $_POST["userid"];
    $pwd = $_POST["userpwd"];

    $con = mysqli_connect("localhost", "oktobat1", "pajong153!", "tour");
    $sql = "select * from member where userid='$id'";
    $result = mysqli_query($con, $sql);
    $record_num = mysqli_num_rows($result);

    if ( !$record_num ) {
        echo "<script>
            alert('등록되지 않은 아이디입니다.');
            history.go(-1);
        </script>";
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pwd"];

        mysqli_close($con);

        if ($pwd != $db_pass) {
            echo "<script>
                alert('비밀번호가 틀립니다.');
                history.go(-1);
            </script>";
        } else {
            session_start();
            $_SESSION["userid"] = $row["userid"];
            $_SESSION["username"] = $row["irum"];

            echo "<script>
                location.href = 'index.php';
            </script>";
        }


    }

?>