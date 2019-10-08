<html>
    <head>
        <title>HOME</title>
        <style>
            *{
                margin: 0;
                padding: 0;
               /* background-image: url(pics/htm.jpg); */
                
            }
            #head{
                width: 1518px;
                height: 120px;
                background-color: forestgreen;
            }
            
            #main_content{
                
                width: 1519px;
                height: 1000px;
                margin: 0px;
                padding: 0px;
                background-image: url(pics/20-things-color.jpg);
                background-repeat: no-repeat;
                background-size: 1519px;
                        
            }
            p 
			{
				color: #000000;
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
            .ten1
            {
				
                height: 350px;
                width: 280px;
                background-image: url(pics/10.png);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left;
            }
            .ten2
            {
                height: 350px;
                width: 280px;
                background-image: url(pics/12.jpg);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left; 
            }
            .ten3
            {
                height: 350px;
                width: 280px;
                background-image: url(pics/jee.jpg);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left; 
            }
            .ten4
            {
                height: 350px;
                width: 280px;
               background-image: url(pics/neet.png);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left; 
            }
            .ten5
            {
                height: 350px;
                width: 280px;
                background-image: url(pics/aiims.jpeg);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left; 
            }
            .ten6
            {
                height: 350px;
                width: 280px;
                background-image: url(pics/CA.jpg);
                margin-left: 180px;
                position: inherit;
                text-align: center;
                margin-top: 100px;
                float: left; 
            }
            .tenStandard
            {
                position: relative;
                font-size: 16px;
                line-height: 24px;
                text-align: center;
                top: 50%;
                font-size: 30px; 
                font-size: 30px; 
                font-size: 30px; 
                
            }
            
            div#twelve
            {
                background-color: darkred;
            }
            div#JEE
            {
                background-color: darkseagreen;
            }
            div#neet
            {
                background-color: burlywood;
            }
            div#aiims
            {
                background-color: darkgoldenrod;
            }
            div#ca
            {
                background-color: coral;
            }
           
            .foot{
                width: 1518px;
                height: 30px;;
                position: relative;  
                background-color: forestgreen;
                margin-top: 0%;
            }
            
        </style>
    </head>
    <body>  
        <div id='head'>
            <font class='top'>COLLEGE ADMISSION PREDICTOR</font>
            <br>
            <font class="bottom">(Boards / JEE(Mains + Advance) / NEET / AIIMS)</font>
        </div>
		<table align="right">
		<tr>
		<th><td><a href="http://localhost/puneUniv/" type="button">Logout</a></th>
		</tr></table>
        <div id="main_content" >
        <a href="10.php" >
        <div class="ten1">
            <p class='tenStandard'><b>10<sup>th</sup> Standard</b><p>
        </div>
        </a>
        <a href="12.php">
        <div class="ten2" id="twelve">
            <p class="tenStandard"><b>12<sup>th</sup> Standard</b></p>
        </div>
        </a>
        <a href="JEE.php">
        <div class="ten3" id="JEE">
            <p class="tenStandard"><b>JEE<br>(MAIN) <br>+<br> (ADVANCE)</b></p>
        </div>
        </a>
        <a href="neet.php">
        <div class="ten4" id="neet">
            <p class="tenStandard"><b>NEET</b></p>
        </div>
            </a>
        <a href="AIIMS.php">
        <div class="ten5" id="aiims">
            <p class="tenStandard"><b>AIIMS</b></p>
        </div>
        </a>
        <a href="CA.php">
        <div class="ten6" id="ca">
            <p class="tenStandard"><b>CA</b></p>
        </div>
        </a>
        </div>
        <footer class="foot">
            <p><center><b>@copyright |  Designed by IMED,Pune</b></center></p>
        </footer>
        
    </body>
</html>