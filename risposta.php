<?php
$parolaDaBannare = $_GET['banna'];
// phpinfo();
trim($parolaDaBannare);
ucwords($parolaDaBannare);
$text = $_GET['text'];
// var_dump($text);
$newArrayBan = explode(' ',ucwords($parolaDaBannare));
// var_dump($newArrayBan);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-6 m-auto bg-light rounded p-3">

                <?php echo "<h2>Parole da Bannare: $parolaDaBannare</h2>"; ?>


                    <?php
                    echo "<h4 class='fs-5'>Lunghezza paragraph: " . strlen($text) . " caratteri</h4>";?>
                <div class="">
                    <?php echo  str_replace($newArrayBan,'xxx',$text);?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>