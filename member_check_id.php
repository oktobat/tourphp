<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복체크</title>
    <style>
        h3 { text-align:center }
        p { text-align:center }
    </style>
</head>
<body>

    <h3>아이디 중복체크</h3>
    <p>
        <?php
            $id = $_GET["id"];

            if ( !$id ) {
                echo "아이디를 입력해주세요.";
            } else {
                $con = mysqli_connect("localhost", "oktobat1", "pajong153!", "tour");
                $sql = "select * from member where userid='$id'";
                $result = mysqli_query($con, $sql);
                $num_record = mysqli_num_rows($result);

                if ($num_record) {
                    echo "{$id}는 중복됩니다. <br> 다른 아이디를 사용해 주세요.";
                } else {
                    echo "{$id} 아이디는 사용 가능합니다.";
                }
                mysqli_close($con);
            }
        ?>
    </p>

    <div id="close">
        <a href="javascript:;" onclick="javascript:self.close()">닫기</a>
    </div>

</body>
</html>