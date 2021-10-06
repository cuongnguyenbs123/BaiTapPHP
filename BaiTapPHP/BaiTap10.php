<?php
require('./path/header.php');
    class Person{
        public $hoten;
        public $ngaysinh;
        public $quequan;

        public function sethoten($hoten){
            $this->hoten =$hoten;
        }
        public function gethoten(){
            return $this->hoten;
        }
        public function setngaysinh($ngaysinh){
            $this->ngaysinh =$ngaysinh;
        }
        public function getngaysinh(){
            return $this->ngaysinh;
        }
        public function setquequan($quequan){
            $this->quequan =$quequan;
        }
        public function getquequan(){
            return $this->quequan;
        }
    }
    class SinhVien extends Person{
        public $lop;

        public function setlop($lop)
        {
            $this->lop=$lop;
        }
        public function getlop()
        {
           return  $this->lop;
        }
    }
    $sinhvien =new SinhVien();
    if (isset($_POST['submit'])) {
        $sinhvien->sethoten( $_POST['hoten']);
        $sinhvien->setlop( $_POST['lop']);
        $sinhvien->setquequan( $_POST['quequan']);
        $sinhvien->setngaysinh( $_POST['ngaysinh']);
    }
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài :Class PERSON gồm các thông tin: Họtên, ngày sinh, quê quán.Xây dựng class SINHVIENkếthừa từ class trên và có thêm thuộc tính lớp.
      Tạo đối tượng sinh viên với thông tin in ra là thông tin cá nhân của sinh viên.
      <div>
          <p style="text-align: center;">Nhập sinh viên:</p>
                    <form action="" method="POST">
                        <input type="text" name="hoten" placeholder="Nhập tên sinh viên" id="hoten">
                        <input type="text" name="quequan" placeholder="Nhập quê quán" id="quequan">
                        <input type="date" name="ngaysinh" id="ngaysinh">
                        <input type="text" name="lop" placeholder="Nhập lớp" id="lop"> <br>
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <?php 
                 
                
                    if (isset($_POST['submit'])) {
                           
                        if($sinhvien->gethoten() ==""){
                            echo"Hãy nhập đủ họ tên";
                        }else if($sinhvien->getquequan()=="")
                        {
                         echo"Hãy nhập đủ họ tên";
                        }
                        else if($sinhvien->getngaysinh()=="")
                        {
                         echo"Hãy nhập đủ ngày sinh";
                        }
                        else if($sinhvien->getlop()=="")
                        {
                         echo"Hãy nhập đủ lớp";
                        }
                        else{
                            echo 'Thông tin sinh viên đã nhập: <br>';
                            echo 'Họ tên :'. $sinhvien->gethoten() .'<br>';
                            echo 'Ngày sinh :'. $sinhvien->getngaysinh() .'<br>';
                            echo 'Quê quán :'. $sinhvien->getquequan() .'<br>';
                            echo 'Lớp :'. $sinhvien->getlop();
                        }
                       
                     }

                   ?>
 </div>          
</div>
</div>
 </div>          
</body>
<?php require('./path/footer.php');?>
</html>
<style>
    input{
        margin-left: 35px;
    }
    input[type=submit]{
        margin-top: 8px;
    }
</style>
<script>

    function validate() {
      var n1 = document.getElementById("hoten").value;
      var n2 = document.getElementById("quequan").value;
      var n3 = document.getElementById("ngaysinh").value;
      var n4 = document.getElementById("lop").value;
 
      if(n1=="") {
         alert("Không được để trống họ tên");
      }
      else if(n2==""){
        alert("Không được để trống quê quán");
      }
      else if(n3==""){
        alert("Không được để trống ngày sinh");
      }
      else if(n4==""){
        alert("Không được để trống lớp");
      }
      
    
    }
</script>