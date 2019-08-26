<?php require_once("include/DB.php"); ?>
<?php require_once("include/function.php"); ?>
<?php require_once("include/session.php"); ?>
<?php
if (isset($_POST["Submit"])){
$name = $_POST["org_name"] ;
$email = $_POST["email"] ;
$password= $_POST["password"] ;
$conpassword= $_POST["conpassword"] ;
$phone= $_POST["phone"] ;
$image= $_FILES["image"]["name"] ; //Selcting only the name of the image
$target = "upload/".basename($_FILES["image"]["name"]); //Showing the directory


if(empty($name) || empty($email) || empty($password) || empty($phone)  ) {
  $_SESSION["ErrorMessage"]="All fields must be filled out";
  Redirect_to("admin_register.php");
}elseif (strlen($name)<2) {
  $_SESSION["ErrorMessage"]="Organization Name must be greater than 2 characters";
  Redirect_to("admin_register.php");
}elseif (strlen($name)>40) {
  $_SESSION["ErrorMessage"]="Organization Name must be less than 40 characters";
  Redirect_to("admin_register.php");

}elseif ($password != $conpassword) {
  $_SESSION["ErrorMessage"]="Password and Confirmation Password must be same";
  Redirect_to("admin_register.php");

}elseif (CheckadminnameExistsOrNot($name)) {
  $_SESSION["ErrorMessage"]="This Name is already taken.Please try with Something Else ";
  Redirect_to("admin_register.php");

}elseif (CheckadminemailExistsOrNot($email)) {
  $_SESSION["ErrorMessage"]="This Email already Exists.Please try another one ";
  Redirect_to("admin_register.php");

}else {
   //Query to insert info into database
   $sql="INSERT INTO admin(name,email,password,phone,image)";
   $sql .="VALUES(:NamE,:EmaiL,:PassWord,:PhonE,:ImagE)";
   $stmt = $connectingdb->prepare( $sql);
   $stmt->bindValue(':NamE',$name );
   $stmt->bindValue(':EmaiL',$email);
   $stmt->bindValue(':PassWord',$conpassword);
   $stmt->bindValue(':PhonE',$phone);
   $stmt->bindValue(':ImagE',$image);
   $Execute=$stmt->execute();
   move_uploaded_file($_FILES["image"]["tmp_name"],$target); //To fetch the file in to the destination

   if($Execute){
    $_SESSION["SuccessMessage"] = "Registered Succesfully";
    Redirect_to("admin_register.php");
  }else{
    $_SESSION["ErrorMessage"]="Something went wrong. Please Try again";
    Redirect_to("admin_register.php");
  }
}
}
 ?>
