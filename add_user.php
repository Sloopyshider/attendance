<?php
include 'sections/session.php';
include 'sections/navbar2.php';



if(isset($_POST['AddUser'])){

    $id = $_POST['id'];
    $username = $_POST['username'];
    $fname = $_POST ['fname'];
    $mid_name = $_POST ['mid_name'];
    $last_name = $_POST ['last_name'];
    $bday = $_POST ['bday'];
    $address = $_POST ['address'];
    $email_add = $_POST ['email_add'];
    $posit = $_POST ['posit'];
    $numb = $_POST ['numb'];
    $numb2 = $_POST ['numb2'];
    $pass = $_POST ['pass'];
    $con_pass = $_POST ['con_pass'];
    }

$userId = $user['id'];
$userName = $user['username'];
$firstname = $user ['name'];
$mid_name = $user ['midname'];
$last_name = $user ['lastname'];
$bday = $user ['birthdate'];
$address = $user ['address'];
$email_add = $user ['email'];
$userPositionId = $user['pos'];
$numb = $user ['contact'];
$pass = $user ['password'];
$con_pass = $user ['password'];
$numb2 = $user ['sub_contact'];


?>


<head>

    <title> Add User Profile </title>
    <link href='/cssfiles/main.css' rel='stylesheet' type='text/css'>

</head>
<body>

<?php

echo"


        
<hr>
<br>

<form action='add_user.php' method='post'>
<td>
<div style='padding-top: 50px'>
    <input type='hidden' placeholder='id' name='id' id='id' value='$userId'> 
    
    <label style='padding-left: 362px'>Username:</label><input type='text' placeholder='Edit your Username' id='username'  name='username' pattern='[a-z]{2,}'  style='width: 20%' value=''/>
    <label style='margin-left: 165px'></label>E-mail:<input type='email' placeholder='Put your Email'  readonly name='email_add' id='email_add' style='width: 20%' value=''/> 
    <br><br>
    <label style='padding-left: 355px'>First Name:</label><input type='text' placeholder='Put your First Name' id='fname'   name='fname' style='width: 20%' value=''/>
    <label style='margin-left: 148px'></label>Password:<input type='password' placeholder='Update your Password'  name='pass' id='pass' style='width: 20%'/>
    <br><br>
    <label style='margin-left: 340px'>Middle Name:</label><input type='text' placeholder='Put your Middle Name' id='mid_name' name='mid_name'   style='width: 20%' value=''/>
    <label style='margin-left: 90px'>Confirm Password:</label><input type='password' placeholder='Re-type your New Password'  name='con_pass' id='con_pass' style='width: 20%'/>
    <br><br>
    <label style='padding-left: 358px'>Last Name:</label><input type='text' placeholder='Edit your Last name' id='last_name'  name='last_name'  style='width: 20%' value=''/>
    <label style='margin-left: 105px'>Contact Number:</label><input type='tel' placeholder='Please put your number'  name='numb' id='numb' style='width: 20%' value='' maxlength='11'/>
    <br><br>
    <label style='padding-left: 372px'>Birthday:</label><input type='date' placeholder='Select Birthdate' id='bday'  name='bday' pattern='[A-Za-z]' style='width:20%' value=''/>
    <label style='margin-left: 82px'>Emergency Number:</label></label><input type='tel' placeholder='Please put a Emergency Number'  name='numb2' id='numb2' style='width: 20%;' value='' maxlength='11'/>
    <br><br>
    
    <label style='padding-left: 375px'>Address:</label><input type='text' placeholder='Street/Block/Subdv No.' id='address'  name='address'   style='width: 20%' value=''/>";






echo"
<button type='reset' class='edit' name='addUser' id='addUser'> ADD USER </button>


</div>
</td>
</table>
</form>";
?>



</body>

<?php
include 'sections/footer2.php'
?>