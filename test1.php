<?php
$host = "localhost";
$user = "root";
$passwd = "";
$dbmame = "practice";
$conn = new mysqli($host, $user, $passwd, $dbmame);
if(!$conn){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select EMPNO, ENAME, JOB, DNAME from emp inner join dept on emp.DEPTNO = dept.DEPTNO";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>HTML5 เบื้องต้น</title>
    <!--this is comment section-->
</head>

<body>
    <div>
        <h2>Hello world</h2>
    </div>
    <table border="1">
        <tr>
            <th>รหัสพนักงาน</td>
            <th>ชื่อ-นามสกุล</td>
            <th>ตำแหน่ง</td>
            <th>แผนก</td>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) { ?>
 
        <tr>
            <td><?php echo $row['EMPNO'] ?></td>
            <td><?php echo $row['ENAME'] ?></td>
            <td><?php echo $row['JOB'] ?></td>
            <td><?php echo $row['DNAME'] ?></td>
        </tr>
        <?php  } //end loop
        } //end if ?>  

       
    </table>
</body>
</html>



