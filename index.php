<html>
    <head>
        <title>HOME</title>
        <title>College Search</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
             #head{
                width: 100%;
                height: 120px;
                background-color: forestgreen;
            }
            .top
            {
                font-size: 50;
                margin-left: 350px;
                margin-top: 300px;
            }
            .bottom
            {
                margin-left: 430px;
                font-size: 30;
                margin-bottom: 20px;
            }
            .foot{
                
                width: 100%;
                height: 30px;
                position: relative;  
                background-color: forestgreen;
                margin-top: 10%;
            }
        </style>
    </head>
    <body style="background-color: gray;">
        <div id='head'>
            <font class='top'>COLLEGE ADMISSION PREDICTOR</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
        
<?php
           
        global $name,$mail,$number,$address,$password;
        
         $con = mysqli_connect('127.0.0.1','root','');
        if(!$con)
    {
        echo 'Not Connected to Server.';
    }
        if(!mysqli_select_db($con,'punestudents'))
    {
        echo 'Database not selected.';
    }

        if(isset($_POST["t1"]) && !empty($_POST["t1"]))
    {
        $name = $_POST["t1"];
    }
        if(isset($_POST["t2"]) && !empty($_POST["t2"]))
    {
        $mail = $_POST["t2"];
    }
        if(isset($_POST["t3"]) && !empty($_POST["t3"]))
    {
        $number = $_POST["t3"];
    }
        if(isset($_POST["t4"]) && !empty($_POST["t4"]))
    {
        $address = $_POST["t4"];
    }
        if(isset($_POST["t5"]) && !empty($_POST["t5"]) == isset($_POST["t6"]) && !empty($_POST["t6"]))
    {
        $password = $_POST["t5"];
    }
        
        

$sql1 = "INSERT INTO studentdetails VALUES('$name','$mail','$number','$address','$password')";
if(!mysqli_query($con,$sql1))
{
    echo 'NOT INSERTED';
}
else
{
    echo '';
}
  
        
?>
        
        <center>
            <div style="margin-top: 200px; height: 220px; width: 280px; background-color: powderblue">
        <form action="validateLogin.php" method="post">
            
            <h3><u>Login to College Portal</u></h3>
			<br>
            <input type="text" id="t1" name="t1" placeholder="Enter your e-mail" size="28" style="background-color: darkorange; height: 28px ">
            <br>
            <br>
            <input type="password" id="t2" name="t2" placeholder="Enter password" size="28" style="background-color: darkgrey; height: 28px">
           
            <br>
            <center><input type="submit" value="Login" style="background-color: lightgreen"></center><br>
            </form>
                <form action="registerform.php" method="post">
                    <center><input type="submit" value="New User Register" style="background-color: red"></center>
                </form>
				<br>
				 <form action="colgreg.html" method="post">
                    <center><input type="submit" value="College Registration" style="background-color: pink"></center>
                </form>
				
            </div>
            <footer class="foot">
            <p><center><b>@copyright |  Designed by IMED,Pune</b></center></p>
        </footer>
        
        </center>
    </body>
</html>