
<?php

$conn = mysqli_connect('localhost', 'root', '', 'tihcollegespace');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $role = $_POST['role'];
    echo($email);
    $check = "SELECT * FROM verification_data where email='$email'";
    $q = mysqli_query($conn,$check);
    $arr = mysqli_fetch_array($q);
    if($arr['role'] == $role && $arr['role'] == 'teacher'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        ol{
            width: auto;
            height: 100px;
        }
        ol li{
            width: 100px;
            height: 50px;
            background: yellow;
            float: left;
            margin-left: 10px;
            list-style-type: none;
            padding-top: 15px;
            text-align: center;
            border-radius: 10px;
            animation: ;
        }
        ol li a{
            text-decoration: none;
            color: black;
        }
       
    </style>
</head>
<body>
    <form action="register_teacher.php" method="post" enctype="multipart/form-data">
        <div class="wrapper">
            <div class="title">
                Registration Form
            </div>
            <div class="form">
                <div id="Student_details">
                    <h2><?php echo $role?> details</h2>
                    <div class="input_field">
                        <label>First Name*</label>
                        <input type="text" name="firstname" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>Mid Name</label>
                        <input type="text" name="midname" class="input">
                    </div>
                    <div class="input_field">
                        <label>Last Name*</label>
                        <input type="text" name="lastname" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>DOB*</label>
                        <input type="date"name="dob" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>Gender*</label>
                        <div class="custom_select">
                            <select name="gender" id="" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="input_field terms">
                        <label>Department*</label>
                        <label class="check">
                            BCA&nbsp;
                            <input type="checkbox" name="bca" value="bca">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check">
                            BBA&nbsp;
                            <input type="checkbox" name="bba" value="bba">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check">
                            MCA&nbsp;
                            <input type="checkbox" name="mca" value="mca">
                            <span class="checkmark"></span>
                        </label>
                        
                    </div>
                    <div class="input_field">
                        <label>Phone*</label>
                        <input type="tel" id="tel" name="phone" placeholder="1234567890" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>Email*</label>
                        <input type="email" class="input" name="email" value="<?php echo $email?>" readonly>
                    </div>
                    <div class="input_field terms">
                        <label>Password*</label>
                        <input type="password" name="password" id="password" class="input" required>
                        
                    </div>
                    <label class="check">
                            <input type="checkbox" id="show" onclick="togglePass()" value="mca">
                            <span class="checkmark"></span>
                            &nbsp;Show Password
                    </label>
                    <br><br>
                    <div class="input_field">
                        <label>Confirm Password*</label>
                        <input type="password" name="cpassword" id="cpassword" class="input" required>
                    </div>
                    <div class="input_field" id="msg">
                        <label></label>
                    </div>
                    <div class="input_field">
                        <label>Profile Picture</label>
                        <input type="file" name="photo" class="input" required>
                    </div> 
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>I hereby declare that all the information given by me is correct</p>
                </div>
                <div class="input_field">
                    <input type="submit" id="submit" name="submit" class="btn">
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    //phone number validation
    var submit = document.getElementById("submit");
    var tel = document.getElementById("tel");
    function validateTel(){
        if(tel.value.length != 10){
            tel.style.color = 'red';
            submit.disabled = true;
        }
        else{
            tel.style.color = 'black';
            submit.disabled = false;
        }
    }
    tel.onchange = validateTel;
    tel.onkeyup = validateTel;

    //toggle show hide password
    var pass = document.getElementById("password");
    function togglePass(){
       
        if(pass.type == "password"){
            pass.type = "text";
        }
        else{
            pass.type = "password";
        }
    }
    //password verification
    
    var cpass = document.getElementById("cpassword"); 
    var msg = document.getElementById("msg");
    function validatePassword(){
        if(pass.value == cpass.value){
            cpass.style.color = 'black';
            submit.disabled = false;
        }
        else{
            cpass.style.color = 'red';
            submit.disabled = true;
        }
    }
    pass.onchange = validatePassword;
    cpass.onkeyup = validatePassword;
</script>
</html>
<?php
    }
    else if($arr['role'] == $role && $arr['role'] == 'student'){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Form</title>
            <link rel="stylesheet" href="style.css">
            <style>
                
                ol{
                    width: auto;
                    height: 100px;
                }
                ol li{
                    width: 100px;
                    height: 50px;
                    background: yellow;
                    float: left;
                    margin-left: 10px;
                    list-style-type: none;
                    padding-top: 15px;
                    text-align: center;
                    border-radius: 10px;
                    animation: ;
                }
                ol li a{
                    text-decoration: none;
                    color: black;
                }
               
            </style>
        </head>
        <body>
            <form  method="post" enctype="multipart/form-data">
                <div class="wrapper">
                    <div class="title">
                        Registration Form
                    </div>
                    <div class="form">
                        <div id="Student_details">
                            <h2><?php echo $role?> details</h2>
                            <div class="input_field">
                                <label>First Name*</label>
                                <input type="text" name="firstname" class="input" required>
                            </div>
                            <div class="input_field">
                                <label>Mid Name</label>
                                <input type="text" name="midname" class="input">
                            </div>
                            <div class="input_field">
                                <label>Last Name*</label>
                                <input type="text"name="lastname" class="input" required>
                            </div>
                            <div class="input_field">
                                <label>DOB*</label>
                                <input type="date" name="dob" class="input" required>
                            </div>
                            <div class="input_field">
                                <label>Gender*</label>
                                <div class="custom_select">
                                    <select name="gender" id="" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_field terms">
                                <label>Department*</label>
                                <label class="check">
                                    BCA&nbsp;
                                    <input type="checkbox" id="bca" name="bca" value="0" onclick="changeVal(id)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check">
                                    BBA&nbsp;
                                    <input type="checkbox" id="bba" name="bba" value="0" onclick="changeVal(id)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check">
                                    MCA&nbsp;
                                    <input type="checkbox" id="mca" name="mca" value="0" onclick="changeVal(id)">
                                    <span class="checkmark"></span>
                                </label>
                                
                            </div>
                            <div class="input_field">
                                <label>Phone*</label>
                                <input type="tel" id="tel" name="phone" placeholder="1234567890" class="input" required>
                            </div>
                            <div class="input_field">
                                <label>Email*</label>
                                <input type="email" name="email" class="input" value="<?php echo $email?>" readonly>
                            </div>
                            <div class="input_field terms">
                                <label>Password*</label>
                                <input type="password" name="password" id="password" class="input" required>
                                
                            </div>
                            <label class="check">
                                    <input type="checkbox" id="show" onclick="togglePass()">
                                    <span class="checkmark"></span>
                                    &nbsp;Show Password
                            </label>
                            <br><br>
                            <div class="input_field">
                                <label>Confirm Password*</label>
                                <input type="password"  id="cpassword" class="input" required>
                            </div>
                            <div class="input_field" id="msg">
                                <label></label>
                            </div>
                            <div class="input_field">
                                <label>Profile Picture</label>
                                <input type="file" name="photo" class="input" required>
                            </div> 
                        <div class="input_field terms">
                            <label class="check">
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                            </label>
                            <p>I hereby declare that all the information given by me is correct</p>
                        </div>
                        <div class="input_field">
                            <input type="submit" id="submit" name="submit"  class="btn">
                        </div>
                    </div>
                </div>
            </form>
        </body>
        <script>
            //phone number validation
            var submit = document.getElementById("submit");
            var tel = document.getElementById("tel");
            function changeVal(id){
                dep = document.getElementById(id);
                if(dep.value == 0){
                    dep.value = 1;
                }
                else{
                    dep.value = 0;
                }
            }
            function validateTel(){
                if(tel.value.length != 10){
                    tel.style.color = 'red';
                    submit.disabled = true;
                }
                else{
                    tel.style.color = 'black';
                    submit.disabled = false;
                }
            }
            tel.onchange = validateTel;
            tel.onkeyup = validateTel;
        
            //toggle show hide password
            var pass = document.getElementById("password");
            function togglePass(){
               
                if(pass.type == "password"){
                    pass.type = "text";
                }
                else{
                    pass.type = "password";
                }
            }
            //password verification
            
            var cpass = document.getElementById("cpassword"); 
            var msg = document.getElementById("msg");
            function validatePassword(){
                if(pass.value == cpass.value){
                    cpass.style.color = 'black';
                    submit.disabled = false;
                }
                else{
                    cpass.style.color = 'red';
                    submit.disabled = true;
                }
            }
            pass.onchange = validatePassword;
            cpass.onkeyup = validatePassword;
        </script>
        </html>
        <?php
    }
    else {
        echo "Email is not registered as a $role";
        echo "";
    }
}
?>
