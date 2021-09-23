<?php

      $num = $_GET["num"];

      $email1 = $_POST["email_id"];
      $email2 = $_POST["email_domain"];
      if ( !$email2 ) {
            $email2 = $_POST["select_domain"];
      }
      $email = $email1."@".$email2;

      $irum = $_POST["irum"];
      $userid = $_POST["userid"];
      $pwd = $_POST["pwd"];
      $phone = $_POST["phone"];
      $birthday = $_POST["birthday"];
      $gender = $_POST["gender"];

      $hobby = "";
      $cnt = count($_POST["hobby"]);
      for ($i=0; $i<$cnt; $i++) {
            $hobby .= $_POST["hobby"][$i];
            if ($i != $cnt-1) {
                $hobby .= ", ";
            }
      }

      $agree = $_POST["agree"];
      $memo = $_POST["memo"];

      $con = mysqli_connect("localhost", "oktobat1", "pajong153!", "tour");
      $sql = "update member set email='$email', irum='$irum', userid='$userid', pwd='$pwd', phone='$phone', ";
      $sql .= "birthday='$birthday', gender='$gender', hobby='$hobby', agree='$agree', memo='$memo' ";
      $sql .= "where num='$num'";
      mysqli_query($con, $sql);
      mysqli_close($con);

      session_start();
      $_SESSION["userid"] = $userid;
      $_SESSION["username"] = $irum;

      echo "<script>
        location.href = 'index.php'
      </script>";

?>