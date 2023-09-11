<?php
include("db_config.php");


$person_Id = "Person_Id";
$last_Name = "Last_Name";
$first_Name = "First_Name";
$Midlle_Name = "Midlle_Name";
$extention_Name = "Extention_Name";
$sex = "Sex";
$birth_Date = "Birth_Date";
$age = "Age";
$home_Address = "Home_Address";
$civil_Status = "Civil_Status";
$religion = "Religion";
$nationality = "Nationality";
$boarding_Address = "Boarding_Address";
$contact_Number = "Contact_Number";
$email_Address = "Email_Address";



if (array_key_exists('search_user', $_POST)) {
    $Person_Id = $_POST['Person_Id'];

    // Corrected SQL query with SELECT instead of SEARCH
    $SearchUserAccountQuery = "SELECT * FROM person WHERE Person_Id = '$Person_Id'";

    // Execute the SQL query and check if it was successful
    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    // Fetch the user account data
    while ($row = mysqli_fetch_object($result)) {
    // Values for 'username' and 'password' are taken from the query result 
    $last_Name = $row->last_Name;
    $first_Name = $row->first_Name;
    $midlle_Name = $row->midlle_Name;
    $extention_Name = $row->extention_Name;
    $sex = $row->sex;
    $birth_Date= $row->birth_Date;
    $age = $row->age;
    $home_Address = $row->home_Address;
    $civil_Status = $row->civil_Status;
    $religion = $row->religion;
    $nationality = $row->nationality;
    $boarding_Address = $row->boarding_Address;
    $contact_Number = $row->contact_Number;
    $email_Address = $row->email_Address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Person_Id" name="Person_Id">
        <label for="Person_Id">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
    <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $last_Name ?>">
    <label for="Last_Name">Last_Name</label><br>

    <input type="text" id="First_Name" name="First_Name" value="<?php echo $first_Name ?>">
    <label for="First_Name">First_Name</label><br>
    
    <input type="text" id="Midlle_Name" name="Midlle_Name" value="<?php echo $Midlle_Name ?>">
    <label for="Midlle_Name">Midlle_Name</label><br>

    <input type="text" id="Extention_Name" name="Extention_Name" value="<?php echo $extention_Name ?>">
    <label for="Extention_Name">Extention_Name</label><br>

    <input type="text" id="Sex" name="Sex" value="<?php echo $sex ?>">
    <label for="sex">Sex</label><br>

    <input type="text" id="Birth_Date" name="Birth_Date" value="<?php echo $birth_Date ?>">
    <label for="Birth_Date">Birth_Date</label><br>

    <input type="text" id="Age" name="Age" value="<?php echo $age ?>">
    <label for="age">Age</label><br>

    <input type="text" id="Home" name="Home_Address" value="<?php echo $home_Address ?>">
    <label for="home">Home_Address</label><br>

    <input type="text" id="Civil_Status" name="Civil_Status" value="<?php echo $civil_Status ?>">
    <label for="Civil_Status">Civil_Status</label><br>

    <input type="text" id="Nationality" name="Nationality" value="<?php echo $nationality ?>">
    <label for="Nationality">Nationality</label><br>

    <input type="text" id="Religion" name="Religion" value="<?php echo $religion ?>">
    <label for="Religion">Religion</label><br>

    <input type="text" id="Boarding_Address" name="Boarding_Address" value="<?php echo $boarding_Address ?>">
    <label for="Roarding_Address">boarding_address</label><br>
    
    <input type="text" id="Contact_Number" name="Contact_Number" value="<?php echo $contact_Number ?>">
    <label for="Contact_Number">Contact_Number</label><br>

    
    <input type="text" id="Email_Address" name="Email_Address" value="<?php echo $email_Address ?>">
    <label for="Email_Address">Email_Address</label><br>


</body>
</html>