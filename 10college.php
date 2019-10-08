<body bgcolor="orange">
  <?php
            
            $con = mysqli_connect('127.0.0.1','root','');
            if(!$con)
            {
                echo 'Not Connected to server';
            }
        
            if(!mysqli_select_db($con,'punestudents'))
            {
                echo 'Database not selected';
            }
        
            if(isset($_POST["t1"])){
                $name = $_POST["t1"];
            }
            if(isset($_POST["t2"])){
                $course = $_POST["t2"];  
            }
            if(isset($_POST["t3"])){
                $fee = $_POST["t3"];
            }
            if(isset($_POST["t4"])){
                $campus = $_POST["t4"];
            }
            if(isset($_POST["t5"])){
                $description = $_POST["t5"];
            }
            if(isset($_POST["t6"])){
                $eligibility = $_POST["t6"];
            }
            if(isset($_POST["t7"])){
                $email = $_POST["t7"];
            }
            if(isset($_POST["t8"])){
                $phone = $_POST["t8"];
            }
            if(isset($_POST["t9"])){
                $address = $_POST["t9"];
            }
            if(isset($_POST["t10"])){
                $approval = $_POST["t10"];
            }
            if(isset($_POST["t11"])){
                $company1 = $_POST["t11"];
            }
            if(isset($_POST["t12"])){
                $company2 = $_POST["t12"];
            }
            if(isset($_POST["t13"])){
                $company3 = $_POST["t13"];
            }
            if(isset($_POST["t14"])){
                $company4 = $_POST["t14"];
            }
            if(isset($_POST["t15"])){
                $company5 = $_POST["t15"];
            }
            if(isset($_POST["t16"])){
                $collegerank = $_POST["t16"];
            }
            if(isset($_POST["t17"])){
                $placement = $_POST["t17"];
            }
            if(isset($_POST["t18"])){
                $lowrange = $_POST["t18"];
            }
            if(isset($_POST["t19"])){
                $highrange = $_POST["t19"];
            }
            if(isset($_POST["t20"])){
                $stream = $_POST["t20"];
            }
        
            $sql = "INSERT INTO collegedetails VALUES('$name','$course','$fee','$campus','$description','$eligibility','$email','$phone','$address','$approval','$company1','$company2','$company3','$company4','$company5','$collegerank','$placement','$lowrange','$highrange','$stream')";
        
            if(!mysqli_query($con,$sql))
            {
                echo 'Not Inserted.';
            }
            else
            {
                echo 'Inserted successfully.';
            }
        ?>
</body>