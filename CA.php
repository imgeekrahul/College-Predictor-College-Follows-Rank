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
        
         <script type="text/javascript">
            function check()
            {
                var a;
                a = parseInt(document.getElementById("t3").value);
                if(isNaN(a))
                    {
                        alert("Please insert a valid Input");
						return false;
                    }
                else{
                    if(a<1 || a>2000)
                        {
                            alert("Not a valid input");
                            return false;
                        }
                }
            }
             
             function update()
            {
                var a;
                a = document.getElementById("t3").value;
                
                if(isNaN(a))
                    {
                        alert("Not a Number,Please Enter number");
                    }else{
                        return true;
                    }
                
            }
        
        
        </script>
        
         <div id='head'>
            <font class='top'>COLLEGE ADMISSION PREDICTOR</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
		<table align="right">
		<tr>
		<td><a href="http://localhost/puneUniv/" type="button">Logout</a>
		</tr></table>
        <h1>Search College  a/c to your CA Rank : </h1>
        <br>
        <br>
        <form action="CAschool.php" method="post" onSubmit="return check()">
            <table>
                <tr>
                    <h1> MARKS IN :- </h1>
                </tr>
                <tr>
                    <td>NAME</td><td>:</td><td><input type="text" name="t1" id="t1" size="40" required></td>
                </tr>
                <tr>
                    <td>E-mail ID</td><td>:</td><td><input type="email" name="t2" id="t2" size="40" required></td>
                </tr>
                <tr>
                    <td>CA RANK</td><td>:</td><td><input type="text" name="t3" id="t3" size="40" pattern="([0-9]).{0,}" title="Use number." onkeyup="update" maxlength="4"></td>
					<td>(1-2000)</td>
                </tr>
                <!--<tr>
                    <td>Stream</td><td>:</td><td><select name="t4" id="t4"><option>Select any one</option><option value="Commerce">Commerce</option></select></td>
                </tr>-->
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