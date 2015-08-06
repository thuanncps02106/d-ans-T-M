/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function test(){
            var masv = document.forms["thuan"]["MaSV"].value;
            if(masv==""){
                alert("bạn hãy nhập mã sinh viên");
                return false;
            }
            var hotensv = document.forms["thuan"]["hoten"].value;
            if(hotensv == ""){
                alert("bạn chưa nhập tên sinh viên");
                return false;
            }
            var dcsv = document.forms["thuan"]["diachi"].value;
            if(dcsv == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            var gt = document.forms["thuan"]["gioitinh"].value;
            if(gt == ""){
                alert("bạn không được để rỗng");
                return false;
            }
            var qg = document.forms["thuan"]["quocgia"].value;
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