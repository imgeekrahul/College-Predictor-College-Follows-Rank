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
            <font class='top'>Search Colleges according to your marks</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
        
        <center>
            <div style="margin-top: 200px; height: 220px; width: 280px; background-color: powderblue">
        <form action="colgadmin.php" method="post">
            
            <h3><u>Login to College Portal</u></h3>
            <br>
            <input type="text" id="t1" name="t1" placeholder="Enter your e-mail" size="28" style="background-color: darkorange; height: 28px ">
            <br>
            <br>
            <input type="password" id="t2" name="t2" placeholder="Enter password" size="28" style="background-color: darkgrey; height: 28px">
            <br>
            <br>
            <center><input type="submit" value="Login" style="background-color: lightgreen"></center><br>
            </form>
            </div>
            <footer class="foot">
            <p><center><b>@copyright |  Designed by Innovation Technology</b></center></p>
        </footer>
        
        </center>
    </body>
</html>