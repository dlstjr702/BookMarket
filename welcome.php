<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column h-100">

    <?php 
        require "./menu.php"
    ?>
    
    <?php
        $greeting  = "도서 쇼핑몰에 오신것을 환영합니다.";
        $tagline = "Welcome to Web Market!";
    ?>

    <!-- 메인영역 S -->
    <main>
        <div class="container py-5">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold"><?php echo $greeting ?></h1>
                    <p class="col-md-8 fs-4">BookMarket</p>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
                <div class="col-md-12">
                    <div class="h-100 p-5">
                        <h2><?php echo $tagline ?></h2>
                        <?php 
                            date_default_timezone_set("Asia/Seoul");
                            $date = date("Y/m/d");
                            $hour = date("H");
                            $minute = date("i");
                            $second = date("s");
                            if($hour<12 || $hour==24){
                                $am_pm = "AM";
                            }else{
                                $am_pm = "PM";
                                $hour = $hour - 12;
                            }
                            $time = $hour . ":" .$minute . ":". $second . " " . $am_pm;
                            echo "현재 접속 일시 : " .$date . " ".$time;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- 메인영역 E -->

    <?php 
        require "./footer.php"
    ?>

</body>

</html>