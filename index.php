<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Your Website</title>
        <link rel="stylesheet" href="css.css">
        <script>
function test(){
            var masv = document.forms["thuan"]["maSV"].value;
            if(masv==""){
                alert("bạn hãy nhập mã sinh viên");
                return false;
            }
            var hotensv = document.forms["thuan"]["Hoten"].value;
            if(hotensv == ""){
                alert("bạn chưa nhập tên sinh viên");
                return false;
            }
            var dcsv = document.forms["thuan"]["Diachi"].value;
            if(dcsv == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            var gt = document.forms["thuan"]["gioitinh"].value;
            if(gt == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            var qg = document.forms["thuan"]["Quocgia"].value;
            if(qg == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            var tuoi = document.forms["thuan"]["tuoi"].value;
            if(qg == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            return true;
        }
    </script>
    </head>
    <body>
    <header>
        <h1>Your Website</h1>
    </header>
    <section>
            

            <?php
            //Tên sinh Viên: Nguyễn Công Thuận
            //Lớp: PT9305
            //Môn Học: Lập trình wed với PHP    
            echo "<p>Hello World 1</p>";

            $HW = 'Hello World 2';
            echo "<p>$HW<p>";
            ?>  
            <form action="lab1.php" method="post" name="thuan" onsubmit="return test()">
                <h3>Mã Sinh Viên:</h3> <input type="text" name="maSV" placeholder="mã sinh viên"></input>
                <h3>Họ Và Tên:</h3> <input type="text" name="Hoten" placeholder="họ và tên"></input>
                <h3>Địa CHỉ:</h3> <input type="text" name="Diachi" placeholder="địa chỉ "></input>
                <h3>Giới tính:</h3> <input type="text" name="gioitinh" placeholder="giới tính"></input>
                <h3>Quốc Gia:</h3> <input type="text" name="Quocgia" placeholder="quốc gia"></input>
                <h3>Tuổi:</h3> <input type="text" name="tuoi" placeholder="tươi"></input>
            <input type="submit" name="OK" valua="OK"> </input>
            </from>
    </section>
    <footer>
       <p>Copyright 2014 Your name</p>
    </footer>
    </body>
</html>