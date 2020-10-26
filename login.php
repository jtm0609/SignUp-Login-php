<?php
$host='localhost';
$username='root';
$password='0609';
$dbname='user';


$conn=mysqli_connect($host, $username, $password, $dbname);
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
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql="select email, pw from user_table where email='$email' and pw='$pw'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);


if($count==0){
                echo "로그인실패";

}
else{
                echo "로그인성공";
                        $sql="select name, email from user_table where email='$email' and pw='$pw'";
                        $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
                                                echo $row["name"];
                                }


}

        mysql_close($conn);
?>

