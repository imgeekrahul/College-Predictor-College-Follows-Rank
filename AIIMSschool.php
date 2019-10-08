<body bgcolor="orange">
<?php
    
    session_start();
    if(isset($_SESSION['t1']))
    {
        echo 'Welcome, '.$_SESSION['t1'];
    }

    
      global $stream,$name,$mail,$marks;  

    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
    {
        echo 'Not Connected to Server.';
    }
    if(!mysqli_select_db($con,'punestudents'))
    {
        echo 'Database not selected.';
    }

    if(isset($_POST["t1"]))
    {
        $name = $_POST["t1"];
    }
if(isset($_POST["t2"]))
    {
        $mail = $_POST["t2"];
    }
if(isset($_POST["t3"]))
    {
        $marks = $_POST["t3"];
    }
/* if(isset($_POST["t4"]))
{
    $stream = $_POST["t4"];
}*/

$sql1 = "INSERT INTO AIIMSdetails VALUES('$name','$mail','$marks','$stream')";

if(!mysqli_query($con,$sql1))
{
    echo 'NOT INSERTED';
}
else
{
    echo '';
}
    

    if(isset($_POST["t3"]))
    {
        $marks = $_POST["t3"];
    }

    $sql = "select * from collegedetails where '".$marks."' between lowrange and highrange having stream='AIIMS' ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        
            echo "<table width='100%' border='1px'><th>COLLEGE NAME</th><th>COURSE</th><th>FEE</th><th>CAMPUS</th><th>DESCRIPTION</th><th>ELIGIBILITY</th><th>EMAIL</th><th>PHONE</th><th>ADDRESS</th><th>APPROVAL</th><th>COMPANY#1</th><th>COMPANY#2</th><th>COMPANY#3</th><th>COMPANY#4</th><th>COMPANY#5</th><th>COLLEGE RANK</th><th>PLACEMENT</th>";
        
        while($row = mysqli_fetch_array($result))
        {
        
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td></tr>";
        }
            echo "</table>";
            echo "<br>";
    }
	else{
		echo "No data found.";
	}

    mysqli_close($con);
?>
</body>