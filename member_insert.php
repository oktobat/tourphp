<?php 
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
      $sqlid = "select * from member where userid='$userid'";
      $idresult = mysqli_query($con, $sqlid);
      $record_num = mysqli_num_rows($idresult);

      if ($record_num) {
            echo "<script>
                  alert('중복된 아이디입니다.');
                  history.go(-1);
                  </script>";
            exit;
      }

      $sql = "insert into member (email, irum, userid, pwd, phone, birthday, gender, hobby, agree, memo) values ('$email', '$irum', '$userid', '$pwd', '$phone', '$birthday', '$gender', '$hobby', '$agree', '$memo')";
      mysqli_query($con, $sql);
      mysqli_close($con);

      echo "<script>
                  location.href = 'index.php';
            </script>";

?>