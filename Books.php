<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서목록</title>
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
                    <h1 class="display-5 fw-bold">도서목록</h1>
                    <p class="col-md-8 fs-4">BookList</p>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
                <?php 
                $listOfBooks = getAllBooks();
                for($i = 0; $i < count($listOfBooks);$i++){
                    $id = key($listOfBooks);
                    $book = $listOfBooks[$id];
                    next($listOfBooks);
                ?>
                <div class="col-md-4">
                    <div class="h-100 p-5">
                        <a href="processDownloadImage.php?file=<?php echo urlencode($book['filename']); ?>">
                            <img src="./images/<?php echo $book['filename'] ?>" alt="" style="width:100%">
                        </a>
                        <h2><?php echo $book["name"] ?></h2>
                        <p>
                            <?php echo 
                            $book["author"]. " | " .$book["releaseDate"]; 
                            ?>
                        </p>
                        <p><?php echo mb_substr($book["description"],0,90,'utf-8')."..."; ?></p>
                        <p><?php echo $book["unitPrice"] ?>원</p>
                        <p>
                            <a href="./book.php?id=<?php echo $id; ?>">
                                <button class="btn btn-outline-secondary" type="button">상세 정보</button>
                            </a>
                        </p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
    <!-- 메인영역 E -->

    <?php 
        require "./footer.php"
    ?>

</body>
</html>