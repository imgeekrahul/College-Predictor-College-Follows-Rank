<html>
    <head>
        <title>College Search</title>
        <style>
             #head{
                width: 1518px;
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
                width: 1518px;
                height: 30px;
                position: relative;  
                background-color: forestgreen;
                margin-top: 5%;
            }
        </style>
    </head>
    <body>
         <div id='head'>
            <font class='top'>COLLEGE ADMISSION PREDICTOR</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
        <h1>New User Registration : </h1>
        <br>
        <br>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Username</td><td>:</td><td><input type="text" name="t1" id="t1" size="40"></td>
                </tr>
                <tr>
                    <td>E-mail ID</td><td>:</td><td><input type="email" name="t2" id="t2" size="40"></td>
                </tr>
                <tr>
                    <td>Phone Number</td><td>:</td><td><input type="tel" maxlength="10" name="t3" id="t3" size="40"></td>
                </tr>
                <tr>
                    <td>Address</td><td>:</td><td><input type="text" name="t4" id="t4" size="40"></td>
                </tr>
                <tr>
                    <td>Create Password</td><td>:</td><td><input type="text" name="t5" id="t5" size="40"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td><td>:</td><td><input type="text" name="t6" id="t6" size="40"></td>
                </tr>
                <tr>
                    <td></td><td><br><input type="submit" value="Submit"></td>
                </tr>  
            </table>
                
        </form>
        <footer class="foot">
            <p><center><b>@copyright |  Designed by IMED,Pune</b></center></p>
        </footer>
    </body>
</html>