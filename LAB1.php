<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Your Website</title>
        <link rel="stylesheet" href="css.css">
        <script src="js.js"></script>
    </head>
    <body>
    <header>
        <h1>Your Website</h1>
    </header>
    <section>
        <?php
        echo "<h3>Mã Sinh Viên:</h3>".$_POST["maSV"];
        echo "</br>";
        echo "<h3>Họ Và Tên:</h3>".$_POST["Hoten"];
        echo "</br>";
        echo "<h3>Địa CHỉ:</h3>".$_POST["Diachi"];
        echo "</br>";
        echo "<h3>Giới tính:</h3>".$_POST["gioitinh"];
        echo "</br>";
        echo "<h3>Quốc Gia:</h3>".$_POST["Quocgia"];
        echo "</br>";
        echo "<h3>Tuổi:</h3>".$_POST["tuoi"];
        ?>
    </section>
    <footer>
       <p>Copyright 2014 Your name</p>
    </footer>
    </body>
</html>
