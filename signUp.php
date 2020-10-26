<?php

$host='localhost';
$username='root';
$password='0609';
$dbname='user';


$conn=mysqli_connect($host, $username, $password, $dbname);
if(!$conn){
                echo "MySQL 접속 에러 : ";
                        echo mysqli_connect_error();
}
mysqli_set_charset($conn,"utf8");
$name=$_POST['name'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql="select email from user_table where email='$email'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);


if($count==0){
        echo "새로운사용자: ";
                $query="insert into user_table(name,email,pw) values ('$name','$email','$pw')";
                $result2=mysqli_query($conn,$query);
                if($result2){
                        echo "삽입OK";
                }

}
else{
        echo "기존사용자";

}

        mysql_close($conn);



?>
