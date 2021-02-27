<?php
//Conection
$dbc = new mysqli ('sql204.b6b.ir' , 'b6bi_27901504' , 'Matin@Par&' , 'b6bi_27901504_mobtani');
//$key = mysqli_connect('sql204.b6b.ir' , 'b6bi_27901504' , 'Matin@Par&' , 'b6bi_27901504_mobtani');
//sql
$sql = "INSERT INTO message (title , email , section , body) VALUES ('{$_POST['title']}','{$_POST['email']}' , '{$_POST['section']}' , '{$_POST['body']}')";
//Excute
$result = $dbc->query($sql);
//$result = mysqli_query($key,$sql);
//close conection
$dbc -> close();
//mysqli_close($key);
?>
<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="UTF-8">
        <title>تماس با ما</title>
        <link href = "style/style.css" rel = "stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <p>
            <?php 
            //message
            if ($result){
                echo ("پیام شما با موفقیت ثبت شد و در اسرع وقت به آن پاسخ داده خواهد شد");
            }else{
                echo("مشکلی در ثبت پبام شما رخ داده لطفا زمانی دیگر اقدام به ثبت پیام خود کنید");
            }
            ?>
        </p>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>