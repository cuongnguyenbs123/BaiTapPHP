<?php
require 'Conn/config.php';
require 'Conn/db.php';
db_connect($config);
?>
<?php
require('./path/header.php');
?>

<body>
 <?php require('./path/nav.php');?>
 <div class="content">
 <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default"
  data-auto-logout-link="true" data-use-continue-as="false">
 </div>
 <?php
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `tbl_user` WHERE `username` = '{$username}' AND `password` = '{$password}'";  
    // $sql = "SELECT * FROM `tbl_user` WHERE `username` = '".mysqli_real_escape_string($conn, $username)."'"."
    //  AND `password` = " ."'".mysqli_real_escape_string($conn, $password)."'";
    $result  = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) >= 1) {
        echo "<br>" . "Đăng nhập thành công";
    } else {
        echo "<br>" . "Đăng nhập thất bại";
    }
}
?>
 <div class="row">
 
                    <div class="col-md-6">
                        <h5>Login</h5>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control form-control-sm" id="username" name="username" style="width: 250px;">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-sm" name="password" id="password" style="width: 250px;">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="checklogin()" name="btn_login">Login</button>
                        </form>
                    </div>
                  
                    <div class="col-md-6">
                        <h5>Signup For New Account</h5>
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control form-control-sm" id="username1">
                            </div>
                            <div class="form-group">
                                <label for="useremail">User email</label>
                                <input type="email" class="form-control form-control-sm" id="useremail">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="select-title">Select title</label><br>
                                        <select id="select-title" class="form-control form-control-sm" style="width: 100px;">
                                            <option>Mr.</option>
                                            <option>Ms.</option>
                                            <option>Lgbt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="fullname">Full name</label>
                                        <input type="text" class="form-control form-control-sm" id="fullname">
                                    </div>
                                </div>
                            </div>
                            <p class="font-weight-bold">Company detail</p>
                            <p class="font-weight-light">provide detail about your company</p>
                            <div class="form-group">
                                <label for="company-name">Company name</label>
                                <input type="text" class="form-control form-control-sm" id="company-name" style="width: 250px;">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">I am agree with registration</label>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="checkinfo()">Register</button>
                        </form>
                    </div>
                </div>

 </div>          
</body>

</html>
<script>
 function checklogin(){
     var username=document.getElementById("username").value;
     var pass=document.getElementById("password").value;
     if(username=="")
       alert("Hãy nhập tên đăng nhập");
     else if(pass==""){
         alert("Hãy nhập mật khẩu");
     }
 }
 function checkinfo(){
    var username=document.getElementById("username1").value;
     var useremail=document.getElementById("useremail").value;
     var fullname=document.getElementById("fullname").value;
     if(username=="")
       alert("Hãy nhập tên người dùng");
     else if(useremail==""){
         alert("Hãy nhập email");
     }
     else if(fullname==""){
         alert("Hãy nhập họ tên đầy đủ");
     }
 }
</script>