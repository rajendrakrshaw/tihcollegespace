
<?php
$conn = mysqli_connect('localhost', 'root', '', 'tihcollespace');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $role = $_POST['role'];
    echo($email);
    $check = "SELECT * FROM verification_data where email='$email'";
    $q = mysqli_query($conn,$check);
    $arr = mysqli_fetch_array($q);
    if($arr['role'] == $role){
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
    <form action="">
        <div class="wrapper">
            <div class="title">
                Registration Form
            </div>
            <div class="form">
                <div id="Student_details">
                    <h2><?php echo $role?> details</h2>
                    <div class="input_field">
                        <label>First Name*</label>
                        <input type="text" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>Mid Name</label>
                        <input type="text" class="input">
                    </div>
                    <div class="input_field">
                        <label>Last Name*</label>
                        <input type="text" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>DOB*</label>
                        <input type="date" class="input" required>
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
                    <div class="input_field">
                        <label>Phone*</label>
                        <input type="tel" placeholder="123-456-7890" pettern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="input" required>
                    </div>
                    <div class="input_field">
                        <label>Email*</label>
                        <input type="email" class="input" value="<?php echo $email?>" readonly>
                    </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" require>
                        <span class="checkmark"></span>
                    </label>
                    <p>I hereby declare that all the information given by me is correct</p>
                </div>
                <div class="input_field">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<?php
    }
    else{
        echo "Email is not registered as a $role";
        echo "";
    }
}
?>
