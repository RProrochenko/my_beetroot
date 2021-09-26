<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    require_once('./getProduct.php');
    require_once('./browsProduct.php');
    ?>
</head>
<body>
<div class="w3-twothird">
    <form action="/index.php" method="POST">
        <table class="w3-table w3-striped w3-bordered w3-border">

            <?php
            if (!empty($_SESSION)) {
                browsSession();
            } else {
                browsProduct();
            }

            ?>

        </table>
    </form>
</div>
</body>
</html>
