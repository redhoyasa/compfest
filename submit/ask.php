<!DOCTYPE html>
<html>
    
    <head>
        <title>CompFest 2013 | Join The Team</title>
        <script type="text/javascript" src="bootstrap/js/jquery-latest.js"></script>
        <link rel="stylesheet" href="../join/css/style.css">
        <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css"
        media="screen" />
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
        <script>
            $(document).ready(function () {

                $("a#inline").fancybox({
                    'hideOnContentClick': true
                });

            });
        </script>
        <style>
        	#sa {
        	    left : 50%;
        	    margin-left : -200px;
        	}
        	
        	#du {
        		text-align : center;
        		height : 3400px;
	padding : 50px;
	border-radius: 10px;
	width : 800px;
	background: white;
	margin : auto;
	border : 1px solid #cecece;
	box-shadow: 0px 2px 5px #cecece;
	margin-bottom: 90px;
        	}
        	
        	
        	
        </style>
    </head>
    
    <body>
        <div id="sa" class="yuhu">
            	<h1>Tunggu Dulu!!!</h1>

            <p>Apakah anda sudah mengerjakan Tugas Umum Staff ??</p>
            <button  class="bt" onclick="window.location='http://compfest.web.id/submit/form.php';">Ya</button>
            <button id="lanjut" class="bt">Tidak</a>
        </div>
         <div id="du">
           <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dEZMTWFvT2hBek81X0FiZ0NCaVhSS0E6MQ" width="760" height="3300" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
           <table>
            <tr><td> <button onclick="window.location='http://compfest.web.id/submit/form.php';" class="bt">Lanjut</button></td>
                <td><a href="https://twitter.com/Compfest" class="twitter-follow-button"
            data-show-count="false" data-size="large">Follow @Compfest</a></td>
            </tr>
        </table>
            <script>
                ! function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");
            </script>
        </div>
    </body>
    <script type="text/javascript">
        $("#du").hide();
        var yes = true;
        $("#lanjut").click(function () {
            $("#sa").hide();
            $("#du").show();
        });
        $("#back").click(function(){
            
        });
    </script>

</html>