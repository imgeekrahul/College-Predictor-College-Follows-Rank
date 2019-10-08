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
                var a,b,c,d,e,f,percent;
                a = parseInt(document.getElementById("t4").value);
                b = parseInt(document.getElementById("t5").value);
                c = parseInt(document.getElementById("t6").value);
                d = parseInt(document.getElementById("t7").value);
                e = parseInt(document.getElementById("t8").value);
                
                if(isNaN(a) || isNaN(b) || isNaN(c) || isNaN(d) || isNaN(e))
                    {
                        alert("Please insert a valid Input");
                        return false;
                    }
                else{
                    if(a<33 || b<33 || c<33  || d<33   || e<33 ){
                        alert("Please insert a valid Input");
                        return false;
                    }
					else if(a>100 || b>100 || c>100 || d>100 || e>100)
                            {
                               alert("Please insert a valid Input");
                                return false;
                            }else{
								return true;	
                            }
					
                    }      
            }
           function calculate()
           {
               var a,b,c,d,e,f,percent;
                a = parseInt(document.getElementById("t4").value);
                b = parseInt(document.getElementById("t5").value);
                c = parseInt(document.getElementById("t6").value);
                d = parseInt(document.getElementById("t7").value);
                e = parseInt(document.getElementById("t8").value);
               
                f = a+b+c+d+e;
                document.getElementById("t9").value = f;
                percent = f/5;
                document.getElementById("t3").value = percent;
           }
        
        </script> 
        
            
         <div id='head'>
            <font class='top'>COLLEGE ADMISSION PREDICTOR</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
		<table align="right">
		<tr>
            <td><a href="http://localhost/puneUniv/" type="button">Logout</a></td>
		</tr>
		</table>
        <h1>Search College  a/c to your 10th marks : </h1>
        <br>
        <br>
        <form action="10school.php" method="post" onsubmit="return check()">
            <table>
                <tr>
                    <td>NAME</td><td>:</td><td><input type="text" name="t1" id="t1" size="20" required></td>
                </tr>
                <tr>
                    <td>E-mail ID</td><td>:</td><td><input type="email" name="t2" id="t2" size="20" required></td>
                </tr>
               
                <tr>
                    <h1> MARKS IN :- </h1>
                </tr>
                <tr>
                    <td>Mathematics</td><td>:</td><td><input type="number" min="0" name="t4" id="t4" size="100" maxlength="3" pattern="([0-90.0100.0]).{1,}" title="Use number."></td>
					<td>(33-100)</td>
                </tr>
                <tr>
                    <td>Science</td><td>:</td><td><input type="number" min="0" name="t5" id="t5" size="100" maxlength="3" pattern="([0-9]).{1,}" title="Use number."></td>
					<td>(33-100)</td>
                </tr>
                <tr>
                    <td>Social Science</td><td>:</td><td><input type="number" min="0" name="t6" id="t6" size="100" maxlength="3" pattern="([0-9]).{1,}" title="Use number."></td>
					<td>(33-100)</td>
                </tr>
                <tr>
                    <td>English</td><td>:</td><td><input type="number" min="0" name="t7" id="t7" size="100" maxlength="3" pattern="([0-9]).{1,}" title="Use number."></td>
					<td>(33-100)</td>
                </tr>
                <tr>
                    <td>Sanskrit/Hindi</td><td>:</td><td><input type="number" min="0" name="t8" id="t8" size="100" maxlength="3" pattern="[([0-9]).{1,}" title="Use number."></td>
					<td>(33-100)</td>
                </tr>
                <tr>
                    <td>Total Marks</td><td>:</td><td><input type="number" min="0" name="t9" id="t9" size="100" pattern="([0-9]).{1,}" title="Use number."></td>
                </tr>
				 <tr>
                    <td>Marks in %s</td><td>:</td><td><input type="text" name="t3" id="t3" size="20" ></td>
                </tr>
                <!-- <tr>
                    <td>Stream</td><td>:</td><td><select name="t10" id="t10"><option>Select any one</option><option value="10">10</option></select></td>
                </tr> -->
                <tr>
                    <td></td><td><br><input type="submit" value="Submit"></td>
                </tr>  
            </table>
        </form>
        <input type="button" value="Calculate" onClick="calculate();">
        <footer class="foot">
            <p><center><b>@copyright |  Designed by IMED,Pune</b></center></p>
        </footer>
    </body>
</html>