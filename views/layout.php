<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title><?= $title ?></title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style >
        .form-group{
            margin-top:10px;
        }
        .custom-select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-select:focus {
            border-color: #66afe9;
            outline: none;
            box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
        }
        tr td:last-child {
            display: flex;
        }
        
        tr td,th{
        text-align: center;
           font-size: 16px;
        }
        th{
            font-size: 13px;
        }
        img{
            width: 200px;
            height: 200px;
        }

        label{
            font-weight: 600;
   
        }
        </style>
<link rel="stylesheet" href="views/include/style.css"></head>
<body>
<?php require_once 'include/nav.php'?>
<div class="m-5 mt-5 ">
    <h2><?= $title ?></h2>
    <hr>
    <?= $content ?>
</div>
<script src="views/script.js"></script>

</body>
</html>