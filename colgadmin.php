<body bgcolor="orange">
<?php
           
        global $name,$password;
        
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
        $password = $_POST["t2"];
    }
    
    if($name == "sagar" && $password == "sagar")
    {
        header("Location: http://localhost/PuneUniv/10colg.html");
    }
else
{
    header("Location: http://localhost/PuneUniv/colgreg.php");
}
    
        
?>
</body>