<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서정보</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column h-100">

    <?php
        require "./model.php";
        require "./menu.php";
    ?>


    <!-- 메인영역 S -->
    <main>
        <div class="container py-5">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">도서정보</h1>
                    <p class="col-md-8 fs-4">BookInfo</p>
                </div>
            </div>

            <?php 
                $id = $_GET["id"];
                $book = getBookById($id);
            ?>


            <div class="row align-items-md-stretch">
                <div class="col-md-5">
                    <img src="./images/<?php echo $book['filename']; ?>" style="width:70%">
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5">  
                        <h2><?= $book["name"]; ?></h2>
                        <p><?= $book["description"]; ?></p>
                        <p><b>도서코드</b> :  <span class="badge text-bg-danger"><?= $id ?></span></p>
                        <p><b>저자</b> : <?= $book["author"]; ?></p>
                        <p><b>출판일</b> : <?= $book["releaseDate"]; ?></p>
                        <p><b>분류</b> : <?= $book["category"]; ?></p>
                        <p><b>재고</b> : <?= $book["unitsInStock"]; ?></p>
                        <p><b>가격</b> : <?= $book["unitPrice"]; ?>원</p>
                        <p>
                            <a href="#" class="btn btn-info">도서주문 &raquo;</a>
                            <a href="./books.php" class="btn btn-secondary">도서목록 &raquo;</a>
                        </p>
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