<?php
   include("db_Config.php");

   ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>
<form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Midlle Name</label><br>
        <input type="text" id="midlle_Name" name="midlle_Name">

        <label>Extention Name</label><br>
        <input type="text" id="Extention Name" name="extention_Name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>

<?php 
  if (array_key_exists('add_Student',$_POST))
  {
         $last_Name= $_POST ['Last_Name'];
         $first_Name= $_POST ['First_Name'];
         $midlle_Name= $_POST ['midlle_Name'];
         $extention_Name= $_POST ['extention_Name'];
         $sex= $_POST ['sex'];
         $birth_Date= $_POST ['birth_Date'];
         $age= $_POST ['age'];
         $home_Address= $_POST ['home_Address'];
         $civil_Status= $_POST ['civil_Status'];
         $nationality= $_POST ['nationality'];
         $religion= $_POST ['religion'];
         $boarding_Address= $_POST ['boarding_Address'];
         $contact_Number= $_POST ['contact_Number'];
         $email_Address= $_POST ['email_Address'];
  
         echo $last_Name;
         echo $first_Name;
         echo $midlle_Name;
         echo $extention_Name;
         echo $sex;
         echo $birth_Date;
         echo $age;
         echo $home_Address;
         echo $civil_Status;
         echo $nationality;
         echo $religion;
         echo $boarding_Address;
         echo $contact_Number;
         echo $email_Address;


        $insert_person= "INSERT INTO person (last_Name, first_Name, midlle_Name, extention_Name, sex, birth_Date, age, home_Address, civil_Status, religion, nationality, boarding_Address, contact_Number, email_Address) 
        VALUES ('$last_Name','$first_Name','$midlle_Name','$extention_Name','$sex',' $birth_Date','$age','$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address');";
        $result= $db_connect->query($insert_person);

        $db_connect->query("SET @Input_last_Name ='" . $last_Name. "'");
        $db_connect->query("SET @Input_first_Name ='" . $first_Name. "'");
        $db_connect->query("SET @Input_midlle_Name ='" . $midlle_Name. "'");
        $db_connect->query("SET @Input_extention_Name ='" . $extention_Name. "'");
        $db_connect->query("SET @Input_sex ='" . $sex. "'");
        $db_connect->query("SET @Input_birth_Date ='" . $birth_Date. "'");
        $db_connect->query("SET @Input_age ='" . $age. "'");
        $db_connect->query("SET @Input_home_Address ='" . $home_Address. "'");
        $db_connect->query("SET @Input_civil_Status ='" . $civil_Status. "'");
        $db_connect->query("SET @Input_nationality ='" . $nationality. "'");
        $db_connect->query("SET @Input_religion ='" . $religion. "'");
        $db_connect->query("SET @Input_boarding_Address ='" . $boarding_Address. "'");
        $db_connect->query("SET @Input_email_Address ='" . $email_Address. "'");
        $insert_person=$db_connect->query("CALL SP_Add_New_User(@Input_last_Name,@Input_first_Name,@Input_midlle_Name,@Input_extention_Name,@Input_sex,@Input_birth_Date,@Input_age,@Input_home_Address,@Input_civil_Status,@Input_nationality,@Input_religion,@Input_boarding_Address,@Input_email_Address)");

        $result= $db_connect->query($insert_person);
         
  }
?>
</body>
</html>