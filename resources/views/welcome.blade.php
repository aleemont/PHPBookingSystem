<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0" >
		<meta name = "author" content = "Alessandro Monticelli">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
      var aperto = false;
      function openClose(){
        aperto = !aperto;
        if(aperto)
          w3_open();
        else
          w3_close();
      }
      function w3_open() {
        var w = window.innerWidth;
        if(w > 550){
          document.getElementById("main").stylerginLeft = "20%";
          document.getElementById("mySidebar").style.width = "20%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
        }
        else{
          document.getElementById("main").style.marginLeft = "50%";
          document.getElementById("mySidebar").style.width = "50%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
          }
      }
      function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
      function tendina(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
        x.className += "w3-show";
        } else {
        x.className = x.className.replace("w3-show", "");
        }
      }
    </script>
	</head>
	<body>
	<div class = "w3-row">
        <div class = "w3-top w3-block w3-teal">
            @if (Route::has('login'))
                <div style = "position:fixed; right:0%">
                    @auth
                        <a class="w3-button" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="w3-button" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="w3-button" href="{{ route('register') }}">Registrati</a>
                        @endif
                    @endif
                </div>
            @endif
	<div class = "w3-half">
		<div class="w3-sidebar w3-bar-block w3-card w3-text-black w3-animate-left" style="display:none" id="mySidebar">
			<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Chiudi &times;</button>
			<p class="w3-bar-item w3-opacity">Link ai file<br></p>
			<button	onclick="tendina('html')" class="w3-bar-item w3-button w3-block w3-left-align">HTML</button>
				<div id="html" class="w3-container w3-hide">
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/orario.html" target="_blank">Orario</a></div>
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/cioccolato.html" target="_blank">Cioccolato</a></div>
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/NBA.html" target="_blank">NBA</a></div>
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/sistemasolare.html" target="_blank">Sistema Solare</a></div>
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/pariDispari.html" target="_blank">Pari e Dispari</a></div>
					<div class = "w3-animate-zoom"><a class = "w3-button w3-block w3-left-align" href = "./html/array.html" target="_blank">Array</a></div>
					<div class = "w3-animate-zoom"><br><button	onclick="tendina('htmlImages')" class="w3-bar-item w3-button w3-block w3-left-align">Immagini</button></div><br>
						<div id = "htmlImages" class = "w3-container w3-hide">
							<div class = "w3-animate-zoom">
								<a class = "w3-button w3-block w3-left-align" href = "./downloads/immagini/cioccolato.zip" download>Cioccolato</a>
							</div>
							<div class = "w3-animate-zoom">
								<a class = "w3-button w3-block w3-left-align" href = "./downloads/immagini/NBA.zip" download>NBA</a>
							</div>
							<div class = "w3-animate-zoom">
								<a class = "w3-button w3-block w3-left-align" href = "./downloads/immagini/sistemaSolare.zip" download>Sistema Solare</a>
							</div>
							<br>
						</div>
					<div class = "w3-animate-zoom"><button	onclick="tendina('CSS')" class="w3-bar-item w3-button w3-block w3-left-align">CSS</button></div><br>
						<div id = "CSS" class = "w3-container w3-hide">
							<div class = "w3-animate-zoom">
								<a target = "_blank" class = "w3-button w3-block w3-left-align" href = "./css/stileOrario.css">Orario</a>
							</div>
							<div class = "w3-animate-zoom">
								<a target = "_blank" class = "w3-button w3-block w3-left-align" href = "./css/stileCioccolato.css">Cioccolato</a>
							</div>
							<div class = "w3-animate-zoom">
								<a target = "_blank" class = "w3-button w3-block w3-left-align" href = "./css/stileNBA.css">NBA</a>
							</div>
							<div class = "w3-animate-zoom">
								<a target = "_blank" class = "w3-button w3-block w3-left-align" href = "./css/stileSistemaSolare.css">Sistema Solare</a>
							</div>
							<div class = "w3-animate-zoom">
								<a target = "_blank" class = "w3-button w3-block w3-left-align" href = "https://www.w3schools.com/w3css/">W3.CSS</a>
							</div>
							<br>
						</div>
				</div>
			<button onclick="tendina('java')" class="w3-bar-item w3-button w3-block w3-left-align">Java</button>
			<div id="java" class="w3-container w3-hide">
				<div class = "w3-animate-zoom"><a  class = "w3-button" href = "./downloads/Java/FibonacciCollatz.zip" download>FibonacciCollatzGUI</a></div>
			</div>		
		</div>
	</div>
	</div>
		<div id="main">
			<div class="w3-teal">
				<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
				<div class="w3-container">
					<h1>Progetti<small style = "font-size:50%"> di Alessandro Monticelli I.T.T. G.Giorgi 4&#176;CI</small></h1>
				</div>
				<div class = "w3-container w3-blue-gray">
				<h4 class = "w3-opacity w3-padding-small sorgente" style = "font-size:120%">Codici sorgente:
				<button id="openNav" class="w3-btn w3-blue-gray w3-right" onclick="openClose()"
				style = "position:absolute; right:1%; -ms-tansform:translateY(-18%);transform: translateY(-18%);">Downloads & Files</button>
				</h4>	
				</div>
				<ul class = "w3-ul w3-hoverable">
					<li class = "w3-white w3-hoverable w3-margin-0 "><button onclick="tendina('codeHtml')" class = "w3-button w3-block w3-white w3-left-align">HTML, Web Developing e JS</button>
						<div id = "codeHtml" class = "w3-container w3-hide ">					
							<ul class = "w3-ul w3-hoverable ">
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml0')" class = "w3-button w3-block w3-white w3-left-align">Orario</button></li>
									<div id = "codeHtml0" class = "w3-container w3-hoverable w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small "style = "height:400px; overflow-y:scroll">	<!--SORGENTE Orario-->
											&lt;!DOCTYPE html&gt;<br>
											&lt;html&gt;<br>
												<div style = "text-indent:2em">&lt;head&gt;<br></div>
												<div style = "text-indent:2em">&lt;link rel = "stylesheet"<br></div>
													<div style = "text-indent:4em">type = "text/css"<br></div>
													<div style = "text-indent:4em">href = "../css/stileOrario.css" /&gt;<br></div>
													<div style = "text-indent:4em">&lt;link rel = "stylesheet"<br></div>
													<div style = "text-indent:4em">href = "https://www.w3schools.com/w3css/4/w3.css" /&gt;<br></div>
												<div style = "text-indent:2em">&lt;link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css&gt;<br></div>
												<div style = "text-indent:2em">&lt;title&gt;Orario&lt;/title&gt;<br></div>
												<div style = "text-indent:2em">&lt;/head&gt;<br></div>
												<div style = "text-indent:2em">&lt;body class = "w3-white"&gt;<br></div>
													<div style = "text-indent:4em">&lt;div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-ios-blue" style="display:none" id="mySidebar"&gt;<br></div>
													<div style = "text-indent:4em">&lt;button class="w3-bar-item w3-button w3-large" onclick="w3_close()"&gt;Chiudi &times;&lt;/button&gt;<br></div>
													<div style = "text-indent:4em">&lt;p class = "w3-bar-item w3-opacity"&gt;Seleziona orario&lt;/p&gt;<br></div>
													<div style = "text-indent:4em">&lt;button	onclick="tendina('orarioBar')" class="w3-bar-item w3-button w3-block w3-left-align"&gt;Orario Scolastico&lt;/button&gt;<br></div>
													<div style = "text-indent:4em">&lt;div id = "orarioBar" class = "w3-container w3-hide"&gt;<br></div>
														<div style = "text-indent:6em">&lt;p class="w3-bar-item w3-opacity"&gt;Seleziona materia&lt;br&gt;&lt;/p&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('edFis')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Ed. Fisica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="edFis" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('inf')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Informatica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="inf" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì (2 ore)&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì (2 ore)&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('ing')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Inglese&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="ing" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('ita')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Italiano&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="ita" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì (2 ore)&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('mate')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Matematica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="mate" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('irc')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Religione&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="irc" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('sis')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Sistemi e Reti&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="sis" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì (2 ore)&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('sto')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Storia&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="sto" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('tpsit')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;T.P.S.I.T.&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="tpsit" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('tele')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Telecomunicazioni&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="tele" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì (2 ore)&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;button	onclick="tendina('orarioDad')" class="w3-bar-item w3-button w3-block w3-left-align"&gt;Orario<br></div>
															<div style = "text-indent:8em">&lt;span class = "tooltip"&gt;DaD&lt;span class = "tooltiptext"&gt;Didattica a Distanza&lt;/span&gt;&lt;/span&gt;&lt;/button&gt;<br></div>
													<div style = "text-indent:4em">&lt;div id = "orarioDad" class = "w3-container w3-hide"&gt;<br></div>
														<div style = "text-indent:6em">&lt;p class="w3-bar-item w3-opacity"&gt;Seleziona materia&lt;br&gt;&lt;/p&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('edFisDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Ed. Fisica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="edFisDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('infDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Informatica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="infDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('ingDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Inglese&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="ingDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('itaDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Italiano&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="itaDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Lunedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('mateDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Matematica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="mateDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Martedì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Venerdì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('sisDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Sistemi e Reti&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="sisDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('stoDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Storia&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="stoDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Giovedì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('tpsitDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;T.P.S.I.T.&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="tpsitDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Sabato&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;button	onclick="tendina('teleDad')" class="w3-bar-item w3-button w3-block w3-left-align w3-animate-left"&gt;Telecomunicazioni&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div id="teleDad" class="w3-container w3-hide"&gt;<br></div>
																<div style = "text-indent:10em">&lt;div class = "w3-animate-zoom ora"&gt;Mercoledì&lt;/div&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;a id = "hp" href = "../index.html" class="w3-bar-item w3-opacity w3-button w3-left-align w3-bottom" style = "width:25%"&gt;Torna alla Home Page&lt;/a&gt;<br></div>
													<div style = "text-indent:4em">&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;div id="main"&gt;<br></div>
														<div style = "text-indent:6em">&lt;div class="w3-ios-blue"&gt;<br></div>
															<div style = "text-indent:8em">&lt;button id="openNav" class="w3-button w3-ios-blue w3-xlarge  w3-opacity" onclick="w3_open()"&gt;&#9776; Filtra per materia&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;div class="w3-container w3-ios-blue"&gt;<br></div>
																<div style = "text-indent:10em">&lt;h1 class = "intestazione"&gt;Orario Scolastico<br></div>
																<div style = "text-indent:10em">&lt;small style = "font-size:50%"&gt;&nbsp;A.S. 2019/2020&lt;/small&gt;<br></div>
																<div style = "text-indent:10em">&lt;/h1&gt;<br></div>
															<div style = "text-indent:8em">&lt;/div&gt;<br></div>
												<div style = "text-indent:4em">&lt;div id = "orario" class = "w3-card-2 w3-margin w3-display-middle" style = "width:65%"&gt;<br></div>
												<div style = "text-indent:4em">&lt;script&gt;<br></div>
													<div style = "text-indent:6em">function resizeTable(){;<br></div>
															<div style = "text-indent:8em">var w = window.innerWidth;<br></div>
																<div style = "text-indent:10em">if(w < 600){<br></div>
																	<div style = "text-indent:10em">document.getElementById("orario").style.width = "0%";<br></div>
																	<div style = "text-indent:10em">document.getElementById("orario").style.height = "0%";<br></div>
																	<div style = "text-indent:12em">document.getElementById("tabella").style.width = "50%";<br></div>
																	<div style = "text-indent:12em">document.getElementById("tabella").style.height = "50%";<br></div>
																	<div style = "text-indent:12em">document.getElementById("tabella").style.fontSize = "50%";<br></div>
																	<div style = "text-indent:12em">document.getElementById("orario").classList.remove("w3-display-middle");<br></div>
																	<div style = "text-indent:12em">document.getElementById("tabella").classList.remove("w3-display-middle");<br></div>
																	<div style = "text-indent:12em">document.getElementById("intestazione").style.fontSize = "110%";<br></div>
																	<div style = "text-indent:12em">document.getElementById("openNav").innerHTML = "&#9776;";<br></div>
																<div style = "text-indent:10em">}<br></div>
															<div style = "text-indent:8em">}<br></div>
													<div style = "text-indent:6em">document.addEventListener("DOMContentLoaded", resizeTable);<br></div>
												<div style = "text-indent:4em">&lt;/script&gt;<br></div>
												<div style = "text-indent:2em">&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;button class="w3-btn w3-ios-light-blue w3-left-align w3-block" onclick="tendina('orario1')"&gt;Orario Scolastico&lt;/button&gt;<br></div>
												<div style = "text-indent:2em">&lt;div id = "orario1" class = "w3-hide w3-animate-left w3-container w3-ios-light-blue"&gt;<br></div>
												<div style = "text-indent:4em">&lt;table id = "tab" class = "w3-show w3-table w3-bordered"&gt;<br><br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;th&gt;Ora&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Lunedì;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Martedì;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Mercoledì;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Giovedì;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Venerdì;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;Sabato&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;1&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Inglese&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Italiano&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Storia&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Informatica&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;2&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Matematica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Italiano&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Ed. Fisica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Matematica&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;3&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;Telec.&lt;span class = "tooltiptext"&gt;Telecomunicazioni&lt;/span&gt;&lt;/div&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Italiano&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Inglese&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Matematica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Storia&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;8&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;Telec.&lt;span class = "tooltiptext"&gt;
														Telecomunicazioni&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Matematica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;Telec.&lt;span class = "tooltiptext"&gt;
														Telecomunicazioni&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;T.P.S.I.T.&lt;span class = "tooltiptext"&gt;
														Tecniche di Prog. Sistemi Informatici&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;T.P.S.I.T.&lt;span class = "tooltiptext"&gt;
														Tecniche di Prog. Sistemi Informatici&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;5&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Religione&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Matematica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td&gt;Italiano&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;div class = "tooltip"&gt;T.P.S.I.T.&lt;span class = "tooltiptext"&gt;
														Tecniche di Prog. Sistemi Informatici&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;tr class = "sesta"&gt;<br></div>
														<div style = "text-indent:8em">&lt;th&gt;8&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;td class = "ultima"&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;td class = "ultima"&gt;Ed. Fisica&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
												<div style = "text-indent:4em">&lt;/table&gt;<br></div>
											<div style = "text-indent:2em">&lt;/div&gt;<br></div>
												<div style = "text-indent:4em">&lt;button class="w3-btn w3-left-align w3-ios-light-blue w3-block" onclick="tendina('orario2')"&gt;Orario<br></div>
												<div style = "text-indent:4em">&lt;span class = "tooltip"&gt;DaD&lt;span class = "tooltiptext"&gt;Didattica a Distanza&lt;/button&gt;<br></div>
												<div style = "text-indent:4em">&lt;div id = "orario2" class = "w3-hide w3-animate-left w3-container w3-ios-light-blue"&gt;<br></div>
													<div style = "text-indent:6em">&lt;table id = "tab" class = "w3-show w3-table"&gt;<br></div>
														<div style = "text-indent:8em">&lt;tr&gt;<br></div>
															<div style = "text-indent:10em">&lt;th&gt;Ora&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Lunedì&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Martedì&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Mercoledì&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Giovedì&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Venerdì&lt;/th&gt;<br></div>
															<div style = "text-indent:10em">&&lt;th&gt;Sabato&lt;/th&gt;<br></div>
														<div style = "text-indent:8em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;tr&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;1&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Informatica&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Matematica&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Inglese&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Matematica&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Informatica&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;tr&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;2&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Italiano&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Ed. Fisica&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;&lt;div class = "tooltip"&gt;Telec.&lt;
															span class = "tooltiptext"&gt;Telecomunicazioni&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Storia&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Informatica&lt;/td&gt;<br>
															<div style = "text-indent:10em">&&lt;td&gt;&lt;div class = "tooltip"&gt;T.P.S.I.T..&lt;
															span class = "tooltiptext"&gt;Tecniche di Prog. Sistemi Informatici&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:8em">&lt;tr&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;3&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Inglese&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Sistemi&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;Italiano&lt;/td&gt;<br></div>
															<div style = "text-indent:10em">&&lt;td&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:8em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:6em">&lt;/table&gt;<br></div>
												<div style = "text-indent:4em">&lt;/div&gt;<br></div>
												<div style = "text-indent:4em">&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;/div&gt;<br></div>
												<div style = "text-indent:1em">&lt;/body&gt;<br></div>
											<div style = "text-indent:1em">&lt;script&gt;<br></div>
												<div style = "text-indent:4em">function w3_open() {<br></div>
														<div style = "text-indent:6em">var w = window.innerWidth;<br></div>
														<div style = "text-indent:6em">if(w > 550){<br></div>
															<div style = "text-indent:8em">document.getElementById("main").style.marginLeft = "25%";<br></div>
															<div style = "text-indent:8em">document.getElementById("mySidebar").style.width = "25%";<br></div>
															<div style = "text-indent:8em">document.getElementById("mySidebar").style.display = "block";<br></div>
															<div style = "text-indent:8em">document.getElementById("openNav").style.display = 'none';<br></div>
														<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">else{<br></div>
															<div style = "text-indent:8em">document.getElementById("main").style.marginLeft = "50%";<br></div>
															<div style = "text-indent:8em">document.getElementById("mySidebar").style.width = "50%";<br></div>
															<div style = "text-indent:8em">document.getElementById("mySidebar").style.display = "block";<br></div>
															<div style = "text-indent:8em">document.getElementById("openNav").style.display = 'none';<br></div>
														<div style = "text-indent:6em">}<br></div>
													<div style = "text-indent:4em">}<br></div>
												<div style = "text-indent:4em">function w3_close() {<br></div>
														<div style = "text-indent:6em">document.getElementById("main").style.marginLeft = "0%";<br></div>
														<div style = "text-indent:6em">document.getElementById("mySidebar").style.display = "none";<br></div>
														<div style = "text-indent:6em">document.getElementById("openNav").style.display = "inline-block";<br></div>
												<div style = "text-indent:4em">}<br></div>
												<div style = "text-indent:4em">function tendina(id) {<br></div>
														<div style = "text-indent:6em">var x = document.getElementById(id);<br></div>
														<div style = "text-indent:6em">if (x.className.indexOf("w3-show") == -1) {<br></div>
															<div style = "text-indent:8em">x.className += "w3-show";<br></div>
														<div style = "text-indent:6em">} else {<br></div>
															<div style = "text-indent:8em">x.className = x.className.replace("w3-show", "");<br></div>
														<div style = "text-indent:6em">}<br></div>
												<div style = "text-indent:4em">}<br></div>
												<div style = "text-indent:2em">&lt;/script&gt;<br></div>
											&lt;/html&gt;<br>	
										</div>
									</div>
								</div>
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml1')" class = "w3-button w3-block w3-white w3-left-align">Cioccolato</button></li>
									<div id = "codeHtml1" class = "w3-container w3-hoverable w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small"style = "height:400px; overflow-y:scroll">	<!--SORGENTE Cioccolato-->
											&lt;!DOCTYPE html&gt; <br>
											&lt;html&gt;<br>
											&lt;head&gt;<br>
												<div style = "text-indent:2em">&lt;link rel = "stylesheet" type = "text/css" href = "../css/stileCioccolato.css" /&gt; <br></div>
												<div style = "text-indent:2em">&lt;meta charset = "ISO-8859-1" name = "viewport" content = "width = device-width, initial-scale = 1.0"&gt; <br></div>
												<div style = "text-indent:2em">&lt;title&gt;Il cioccolato&lt;/title&gt;<br></div>
											&lt;/head&gt;<br>
											&lt;body&gt;<br>
												<div style = "text-indent:2em">&lt;h1&gt;Il cioccolato&lt;/h1&gt;<br></div>
												<div style = "text-indent:2em">&lt;p&gt;	Il cioccolato (o cioccolata, specie se fuso) è un alimento derivato dai semi dell'albero<br></div>
												<div style = "text-indent:4em">	del cacao, ampiamente diffuso e consumato nel mondo intero.<br></div>
												<div style = "text-indent:2em">&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;p&gt;	Nella produzione artigianale di qualità , il cioccolato è preparato utilizzando la pasta di<br></div>
												<div style = "text-indent:4em">	cacao come realizzata e imballata nei paesi origine, con l'aggiunta di ingredienti e <br></div>
												<div style = "text-indent:4em">	aromi. Nella produzione industriale o comunque di minor pregio qualitativo, è <br></div>
												<div style = "text-indent:4em">	preparato miscelando il burro di cacao (la parte grassa dei semi di cacao) con polvere <br></div>
												<div style = "text-indent:4em">	di semi di cacao, zucchero e altri ingredienti facoltativi, come il latte, le mandorle, le<br></div>
												<div style = "text-indent:4em">	nocciole, il pistacchio o altri aromi.<br></div>
												<div style = "text-indent:2em">&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;p&gt;	Dalla miscelazione di diverse quantità  di vari ingredienti (pasta di cacao, burro di <br></div>
												<div style = "text-indent:4em">	cacao, zucchero, latte in polvere, etc.) derivano poi le diverse tipologie di cioccolato:<br></div>
												<div style = "text-indent:2em">&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;ul&gt;<br></div>
												<div style = "text-indent:4em">	&lt;li&gt;cioccolato fondente&lt;/li&gt;<br></div>
												<div style = "text-indent:4em">	&lt;li&gt;cioccolato al latte&lt;/li&gt;<br></div>
												<div style = "text-indent:4em">	&lt;li&gt;cioccolato bianco&lt;/li&gt;<br></div>
												<div style = "text-indent:4em">	&lt;li&gt;cioccolato gianduia&lt;/li&gt;<br></div>
												<div style = "text-indent:2em">&lt;/ul&gt;<br></div>
												<div style = "text-indent:2em">&lt;h2&gt;Tabella di composizione del cioccolato&lt;/h2&gt;<br></div>
												<div style = "text-indent:2em">&lt;table&gt;<br></div>
												<div style = "text-indent:4em">	&lt;tr class = "arancione"&gt;<br></div>								
													<div style = "text-indent:6em">	&lt;th class = "doppio" rowspan="2"&gt;Composizione per 100g. di cioccolato&lt;/th&gt;<br></div>	
													<div style = "text-indent:6em">	&lt;th&gt;&lt;img src="../immagini/cioccolato/fondente.png"&gt;&lt;/th&gt;<br></div>	
													<div style = "text-indent:6em">	&lt;th&gt;&lt;img src="../immagini/cioccolato/latte.png"&gt;&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;&lt;img src="../immagini/cioccolato/bianco.png"&gt;&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;&lt;img src="../immagini/cioccolato/gianduia.png"&gt;&lt;/th&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr class = "arancione"&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;FONDENTE&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;LATTE&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;BIANCO&lt;/th&gt;<br></div>
													<div style = "text-indent:6em">	&lt;th&gt;GIANDUIA&lt;/th&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;Energia(Kcal)&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;515&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;545&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;529&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;543&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;Lipidi (g)&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;33.6&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;36.3&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;30.9&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;36.9&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;Proteine (g)&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;6.6&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;7.3&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;8.0&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;7.2 &lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;Zuccheri (g)&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;49.7&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;50.5&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;58.3&lt;/td&gt;<br></div>
													<div style = "text-indent:6em">	&lt;td&gt;48.6&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
												<div style = "text-indent:2em">&lt;/table&gt;<br></div>
												<div style = "text-indent:2em">&lt;button onclick="bottone()" class="w3-btn w3-right-align w3-small w3-orange" style = "position:absolute; right:1%; bottom:4%"&gt;Firma&lt;/button&gt;</div>
												<div style = "text-indent:2em">&lt;div id = "firma" class = "w3-bottom w3-hide"&gt;&lt;footer  class = "w3-transparent w3-right-align"&gt;Alessandro Monticelli&lt;/footer&gt;&lt;/div&gt;</div>
												<div style = "text-indent:2em">&lt;script&gt;<br></div>
												<div style = "text-indent:4em">var visibile = true;<br></div>
													<div style = "text-indent:4em">function bottone(){<br></div>
													<div style = "text-indent:6em">visibile = !visibile;<br></div>
													<div style = "text-indent:6em">if (visibile == false){<br></div>
													<div style = "text-indent:8em">	document.getElementById('firma').classList.add("w3-hide");<br></div>
													<div style = "text-indent:6em">	}<br></div>
													<div style = "text-indent:6em">else{<br></div>
													<div style = "text-indent:8em">	document.getElementById('firma').classList.remove("w3-hide");<br></div>
													<div style = "text-indent:6em">	}<br></div>
													<div style = "text-indent:4em">}<br></div>
												<div style = "text-indent:2em">&lt;/script&gt;<br></div>
											&lt;/body&gt;<br>
											&lt;/html&gt;<br>
										</div>
									</div>
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml2')" class = "w3-button w3-block w3-white w3-left-align">NBA</button></li>
									<div id = "codeHtml2" class = "w3-container w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small"style = "height:400px; overflow-y:scroll">	<!--SORGENTE NBA-->
											&lt;!DOCTYPE html&gt;<br>
											&lt;html&gt;<br>
												<div style = "text-indent:2em">&lt;head&gt;<br></div>
													<div style = "text-indent:4em">&lt;link rel = "stylesheet" type = "text/css" href = "../css/stileNBA.css" /&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta charset = "ISO-8859-1" name = "viewport" content = "width = device-width, initial-scale = 1.0"&gt;<br></div>
													<div style = "text-indent:4em">&lt;title&gt;NBA&lt;/title&gt;<br></div>
												<div style = "text-indent:2em">&lt;/head&gt;<br></div>
												<div style = "text-indent:2em">&lt;body&gt;<br></div>
													<div style = "text-indent:4em">&lt;h1&gt;NBA&lt;/h1&gt;<br></div>
													<div style = "text-indent:4em">&lt;p&gt;La National Basketball Association, comunemente nota come NBA, è la principale lega <br></div>
													<div style = "text-indent:4em">professionistica di pallacanestro degli Stati Uniti d'America. Molti dei migliori cestisti <br></div>
													<div style = "text-indent:4em">del mondo giocano nella NBA e il livello complessivo della competizione è considerato <br></div>
													<div style = "text-indent:4em">il più alto al mondo. <br></div>
													<div style = "text-indent:4em">&lt;/p&gt;<br></div>
													<div style = "text-indent:4em">&lt;p&gt;La lega fu fondata a New York, il 6 giugno 1946 come Basketball Association of<br> </div>
													<div style = "text-indent:4em">America (BAA). La lega adottò il nome di National Basketball Association nell'autunno <br></div>
													<div style = "text-indent:4em">del 1949 dopo una fusione con la lega rivale National Basketball League. Il quartier<br></div>
													<div style = "text-indent:4em">generale della NBA si trova nella Olympic Tower al 645 della Fifth Avenue a New York. <br></div>
													<div style = "text-indent:4em">La NBA Entertainment e gli studi della NBA TV sono ubicati invece a Secaucus, New Jersey.<br></div>
													<div style = "text-indent:4em">&lt;/p&gt;<br></div>
													<div style = "text-indent:4em">&lt;h2&gt;Record di punti realizzati in carriera&lt;/h2&gt;<br></div>
													<div style = "text-indent:4em">&lt;ol&gt;<br></div>
														<div style = "text-indent:6em">&lt;li&gt; Kareem Abdul-Jabbar 38.387 &lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;li&gt; Karl Malone         36.928 &lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;li&gt; Kobe Bryant         32.310 &lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;li&gt; Michael Jordan      32.292 &lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;li&gt; Wilt Chamberlain    31.419 &lt;/li&gt;<br></div>
													<div style = "text-indent:4em">&lt;/ol&gt;<br></div>
													<div style = "text-indent:4em">&lt;h3&gt;Classifica 2015&lt;/h3&gt;<br></div>
													<div style = "text-indent:4em">&lt;table&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr class = "prima"&gt;<br></div>
															<div style = "text-indent:8em">&lt;th colspan = "4"&gt;EASTERN CONFERENCE&lt;/th&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr class = "seconda"&gt;<br></div>
															<div style = "text-indent:8em">&lt;th colspan = "2"&gt;Eastern Division&lt;/th&gt;<br></div>
															<div style = "text-indent:8em">&lt;th&gt;V&lt;/th&gt;<br></div>
															<div style = "text-indent:8em">&lt;th&gt;P&lt;/th&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;&lt;img src = "../immagini/NBA/raptors.gif"&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;Toronto&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;50&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;24&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;&lt;img src = "../immagini/NBA/bos.gif"&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;Boston&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;43&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;31&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;&lt;img src = "../immagini/NBA/nets.gif"&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;Brooklin&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;30&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;46&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;&lt;img src = "../immagini/NBA/nyk.gif"&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;New York&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;21&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;53&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;tr&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;&lt;img src = "../immagini/NBA/phi.gif"&gt;&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;Philadelphia&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;9&lt;/td&gt;<br></div>
															<div style = "text-indent:8em">&lt;td&gt;66&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;/table&gt;<br></div>
													<div style = "text-indent:4em">&lt;button onclick="bottone()" class="w3-btn w3-right-align w3-grey w3-small" style = "position:fixed; right:1%; bottom:4%"&gt;Firma&lt;/button&gt;<br></div>
													<div style = "text-indent:4em">&lt;div id = "firma" class = "w3-bottom w3-hide"&gt;&lt;footer  class = "w3-transparent w3-right-align"&gt;Alessandro Monticelli&lt;/footer&gt;&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;script&gt;<br></div>
													<div style = "text-indent:4em">var visibile = true;<br></div>
														<div style = "text-indent:6em">function bottone(){<br></div>
														<div style = "text-indent:6em">visibile = !visibile;<br></div>
														<div style = "text-indent:6em">if (visibile == false){<br></div>
															<div style = "text-indent:8em">document.getElementById('firma').classList.add("w3-hide");<br></div>
															<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">else{<br></div>
															<div style = "text-indent:8em">document.getElementById('firma').classList.remove("w3-hide");<br></div>
															<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">}<br></div>
													<div style = "text-indent:4em">&lt;/script&gt;<br></div>
												<div style = "text-indent:2em">&lt;/body&gt;<br></div>
											&lt;/html&gt;
										</div>
									</div>
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml3')" class = "w3-button w3-block w3-white w3-left-align">Sistema Solare</button></li>
									<div id = "codeHtml3" class = "w3-container w3-hoverable w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small"style = "height:400px; overflow-y:scroll">	<!--SORGENTE SistemaSolare-->
											&lt;!DOCTYPE html&gt;<br>
											&lt;html&gt;<br>
											&lt;head&gt;<br>
												<div style = "text-indent:2em">&lt;link rel = "stylesheet" type = "text/css" href = "../css/stileSistemaSolare.css" /&gt;<br></div>
												<div style = "text-indent:2em">&lt;meta charset = "ISO-8859-1" name = "viewport" content = "width = device-width, initial-scale = 1.0"&gt; <br></div>
												<div style = "text-indent:2em">&lt;title&gt;Sistema Solare&lt;/title&gt;<br></div>
											&lt;/head&gt;<br>
											&lt;body&gt;<br>
												<div style = "text-indent:2em">&lt;h1&gt;Sistema Solare&lt;/h1&gt;<br></div>
												<div style = "text-indent:2em">&lt;p&gt;Le dimensioni del sistema solare sono difficilmente definibili; approssimativamente lo si<br></div>
												<div style = "text-indent:2em">considera come una sfera irregolare con un diametro di circa 80 UA. All'interno del<br></div>
												<div style = "text-indent:2em">sistema solare lo spazio tra un corpo celeste e un altro non è vuoto: esso è permeato dal<br></div>
												<div style = "text-indent:2em">cosiddetto mezzo interplanetario, comprendente pulviscolo, gas e particelle elementari<br></div>
												<div style = "text-indent:2em">&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;p&gt;Il Sole ha una particolare importanza sia perchè è l'unica stella, e quindi l'unica fonte di<br></div> 
												<div style = "text-indent:2em">energia termica del sistema, sia perchè ne rappresenta con ottima approssimazione il <br></div>
												<div style = "text-indent:2em">centro gravitazionale. La massa solare, infatti, costituisce circa il 99,9% della materia<br></div>
												<div style = "text-indent:2em">presente nel sistema. <br></div>
												<div style = "text-indent:2em">&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;h2&gt;Classificazione dei pianeti&lt;/h2&gt;<br></div>
												<div style = "text-indent:2em">&lt;ul&gt;<br></div>
													<div style = "text-indent:4em">&lt;li class = "pianeti"&gt;Pianeti Terrestri&lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;<br></div>
															<div style = "text-indent:8em">&lt;ul&gt;&lt;li&gt;Mercurio&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Venere&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Terra&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Marte&lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;/ul&gt;<br></div>
													<div style = "text-indent:4em">&lt;li class = "pianeti"&gt;Pianeti Gioviani&lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;ul&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Giove&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Saturno&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Urano&lt;/li&gt;<br></div>
															<div style = "text-indent:8em">&lt;li&gt;Nettuno&lt;/li&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;/ul&gt;<br></div>
												<div style = "text-indent:2em">&lt;/ul&gt;<br></div>
												<div style = "text-indent:2em">&lt;table&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr class = "prima"&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;th class = "primoEl" colspan = "2" rowspan = "2"&gt;PIANETI TERRESTRI&lt;/th&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;th colspan = "2"&gt;Caratteristiche&lt;/th&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr class = "seconda"&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;th&gt;Distanza&lt;/th&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;th&gt;Massa&lt;/th&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;&lt;img src = "../immagini/sistemaSolare/mercurio.jpg"&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;Mercurio&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;0.4 UA&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;0.055&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;&lt;img src = "../immagini/sistemaSolare/venere.jpg"&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;Venere&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;0.6 UA&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;0.815&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;&lt;img src = "../immagini/sistemaSolare/terra.jpg"&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;Terra&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;1 UA&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;1.000&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
													<div style = "text-indent:4em">&lt;tr&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;&lt;img src = "../immagini/sistemaSolare/marte.jpg"&gt;&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;Marte&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;1.6 UA&lt;/td&gt;<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;&lt;td&gt;0.107&lt;/td&gt;<br></div>
													<div style = "text-indent:4em">&lt;/tr&gt;<br></div>
												<div style = "text-indent:2em">&lt;/table&gt;<br></div>
												<div style = "text-indent:2em">&lt;button onclick="bottone()" class="w3-btn w3-right-align w3-small" style = "position:absolute; right:1%; bottom:4%"&gt;Firma&lt;/button&gt;<br></div>
												<div style = "text-indent:2em">&lt;div id = "firma" class = "w3-bottom w3-hide"&gt;&lt;footer  class = "w3-transparent w3-right-align"&gt;Alessandro Monticelli&lt;/footer&gt;&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;script&gt;<br></div>
												<div style = "text-indent:2em">var visibile = true;<br></div>
													<div style = "text-indent:4em">function bottone(){<br></div>
													<div style = "text-indent:4em">visibile = !visibile;<br></div>
													<div style = "text-indent:4em">if (visibile == false){<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;document.getElementById('firma').classList.add("w3-hide");<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;}<br></div>
													<div style = "text-indent:4em">else{<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;document.getElementById('firma').classList.remove("w3-hide");<br></div>
														<div style = "text-indent:6em">&lt;ul&gt;}<br></div>
													<div style = "text-indent:4em">}<br></div>
												<div style = "text-indent:2em">&lt;/script&gt;<br></div>
											&lt;/body&gt;<br>
											&lt;/html&gt;<br>
										</div>
									</div>
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml4')" class = "w3-button w3-block w3-white w3-left-align">Pari e Dispari</button></li>
									<div id = "codeHtml4" class = "w3-container w3-hoverable w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small"style = "height:400px; overflow-y:scroll">	<!--SORGENTE PariDispari-->
											&lt;!DOCTYPE html&gt;<br>
											&lt;html&gt;<br>
												<div style = "text-indent:2em">&lt;head&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta name = "viewport" content = "width = device-width initial-scale = 1" /&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta charset = "ANSI"/&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta name = "author" content = "Alessandro Monticelli"/&gt;<br></div>
													<div style = "text-indent:4em">&lt;script&gt;<br></div>
														<div style = "text-indent:6em">function pariDispari(){<br></div>
															<div style = "text-indent:8em">var num = document.getElementById("numero").value;<br></div>
															<div style = "text-indent:8em">var r = num%2;<br></div>
															<div style = "text-indent:8em">var msg = "";<br></div>
															<div style = "text-indent:8em">if(num == "")<br></div>
																<div style = "text-indent:10em">msg = "Inserire un numero";<br></div>
															<div style = "text-indent:8em">else if(r == 0)<br></div>
																<div style = "text-indent:10em">msg = "Numero Pari";<br></div>
															<div style = "text-indent:8em">else<br></div>
																<div style = "text-indent:10em">msg = "Numero Dispari";<br></div>
															<div style = "text-indent:8em">document.getElementById("res").innerHTML = msg;<br></div>
														<div style = "text-indent:6em">}<br></div>
													<div style = "text-indent:4em">&lt;/script&gt;<br></div>
												<div style = "text-indent:2em">&lt;/head&gt;<br></div>
												<div style = "text-indent:2em">&lt;body&gt;<br></div>
													<div style = "text-indent:4em">&lt;div&gt;Inserire un numero intero: &lt;input type = "text" id = "numero"/&gt;&lt;br&gt;&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;button onclick = "pariDispari()"&gt;Controlla&lt;/button&gt;<br></div>
													<div style = "text-indent:4em">&lt;p id = "res"&gt;&lt;/p&gt;<br></div>
												<div style = "text-indent:2em">&lt;/body&gt;<br></div>
											&lt;/html&gt;<br>
										</div>
									</div>
								<li class = "w3-white w3-border-0 w3-animate-zoom"><button onclick="tendina('codeHtml5')" class = "w3-button w3-block w3-white w3-left-align">Array</button></li>
									<div id = "codeHtml5" class = "w3-container w3-hoverable w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-small"style = "height:400px; overflow-y:scroll">	<!--SORGENTE Array-->
											&lt;!DOCTYPE html&gt;<br>
											&lt;html&gt;<br>
												<div style = "text-indent:2em">&lt;head&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta name = "viewport" content = "width = device-width, initial-scale = 1"/&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta name = "author" content = "Alessandro Monticelli"/&gt;<br></div>
													<div style = "text-indent:4em">&lt;meta name = "description" content = "Gestione di un array: creazione, caricamento casuale, ordinamento"/&gt;<br></div>
													<div style = "text-indent:4em">&lt;link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css" /&gt;<br></div>
												<div style = "text-indent:2em">&lt;/head&gt;<br></div>
												<div style = "text-indent:2em">&lt;body class = "w3-teal"&gt;<br></div>
												<div style = "text-indent:2em">&lt;div id = "main"&gt;<br></div>
													<div style = "text-indent:4em">&lt;div class = "w3-blue-grey w3-block"&gt;<br></div>
														<div style = "text-indent:6em">&lt;h1&gt;Gestione di un array&lt;/h1&gt;<br></div>
													<div style = "text-indent:4em">&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;form class = "w3-container"&gt;<br></div>
														<div style = "text-indent:6em">&lt;label for = "dim"&gt;Inserisci dimensione: &lt;/label&gt;<br></div>
														<div style = "text-indent:6em">&lt;div id = "in" style = "width:25%"&gt;&lt;input class = "w3-input" type = "text" id = "dimensione" name = "dim"&gt;&lt;/div&gt;<br></div>
														<div style = "text-indent:6em">&lt;div id = "pulsanti" class = "w3-bar" style = "width:25%"&gt;<br></div>
															<div style = "text-indent:8em">&lt;button id = "carica" class = "w3-button w3-bar-item w3-hover-pale-green w3-small" type = "button"&gt;Carica&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;button id = "stampa" class = "w3-button w3-bar-item w3-hover-pale-green w3-small" type = "button"&gt;Stampa&lt;/button&gt;<br></div>
															<div style = "text-indent:8em">&lt;button id = "ordina" class = "w3-button w3-bar-item w3-hover-pale-green w3-small" type = "button"&gt;Ordina e stampa&lt;/button&gt;<br></div>
														<div style = "text-indent:6em">&lt;/div&gt;<br></div>
													<div style = "text-indent:4em">&lt;/form&gt;<br></div>
													<div style = "text-indent:4em">&lt;div class = "w3-container "&gt;<br></div>
														<div style = "text-indent:6em">&lt;p id = "vettore" class = "w3-border" style = "width: 25%;"&gt;&nbsp;&lt;/p&gt;<br></div>
													<div style = "text-indent:4em">&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;/div&gt;<br></div>
												<div style = "text-indent:2em">&lt;script&gt;<br></div>
													<div style = "text-indent:4em">var v = [];<br></div>
													<div style = "text-indent:4em">function carica(){<br></div>
														<div style = "text-indent:6em">v = [];<br></div>
														<div style = "text-indent:6em">var d = parseInt(document.getElementById('dimensione').value);<br></div>
														<div style = "text-indent:6em">var i = 0;<br></div>
														<div style = "text-indent:6em">for(i = 0; i &lt; d; i++)<br></div>
															<div style = "text-indent:8em">v[i]=Math.floor(Math.random()*50)+1;<br></div>
													<div style = "text-indent:4em">}<br></div>
													<div style = "text-indent:4em">document.getElementById("carica").addEventListener("click",carica);<br></div>
													<br>
													<div style = "text-indent:4em">function stampa(){<br></div>
														<div style = "text-indent:6em">var d = parseInt(document.getElementById('dimensione').value);<br></div>
														<div style = "text-indent:6em">var par = window.innerWidth * 0.01;<br></div>
														<div style = "text-indent:6em">document.getElementById("vettore").innerHTML = "";<br></div>
														<div style = "text-indent:6em">document.getElementById("vettore").innerHTML = v;<br></div>
														<div style = "text-indent:6em">if(d &gt; par)<br></div>
															<div style = "text-indent:8em">document.getElementById("vettore").style.overflowX= "scroll";<br></div>
														<div style = "text-indent:6em">}<br></div>
													<div style = "text-indent:4em">document.getElementById("stampa").addEventListener("click",stampa);<br></div>
													<br>
													<div style = "text-indent:4em">function ordina(){<br></div>
														<div style = "text-indent:6em">v.sort();<br></div>
														<div style = "text-indent:6em">v.sort(function(a, b){return a - b});<br></div>
														<div style = "text-indent:6em">var d = parseInt(document.getElementById('dimensione').value);<br></div>
														<div style = "text-indent:6em">var i = 0;<br></div>
														<div style = "text-indent:6em">document.getElementById("vettore").innerHTML = v;<br></div>
													<div style = "text-indent:4em">}<br></div>
													<div style = "text-indent:4em">document.getElementById("ordina").addEventListener("click",ordina);<br></div>
													<br>
													<div style = "text-indent:4em">function resize(){<br></div>
														<div style = "text-indent:6em">var w = window.innerWidth;<br></div>
														<div style = "text-indent:6em">if(w &lt; 600){<br></div>
															<div style = "text-indent:8em">document.getElementById("vettore").style.width = "50%";<br></div>
															<div style = "text-indent:8em">document.getElementById("in").style.width = "50%";<br></div>
															<div style = "text-indent:8em">document.getElementById("pulsanti").style.width = "50%";<br></div>
														<div style = "text-indent:6em">}<br></div>
													<div style = "text-indent:4em">}<br></div>
													<div style = "text-indent:4em">document.addEventListener("DOMContentLoaded", resize);<br></div>
												<div style = "text-indent:2em">&lt;/script&gt;<br></div>
												<div style = "text-indent:2em">&lt;/body&gt;<br></div>
											&lt;/html&gt;<br>
									</div>	
							</ul>
						</div>
					</li>
						<li class = "w3-white"><button onclick="tendina('codeJ')" class="w3-button w3-block w3-white w3-left-align">Java</button>
						<div id = "codeJ" class = "w3-container w3-hide">
							<ul class = "w3-ul w3-hoverable w3-animate-zoom">
								<li class = "w3-white"><button onclick="tendina('codeJ1')" class="w3-button w3-block w3-white w3-left-align">Fibonacci-Collatz</button>
									<div id = "codeJ1" class = "w3-container w3-hide">
										<div class="w3-code w3-light-gray notranslate w3-"style = "height:400px; overflow-y:scroll"> <!--SORGENTE FibonacciCollatzGUI-->
											public class mainFibo<br>
											{<br>
												<div style = "text-indent: 4em">public static void main(String args[])<br></div>
												<div style = "text-indent: 4em">{<br></div>
													<div style = "text-indent: 6em">FiboFrame myFrame1 = new FiboFrame();<br></div>
													<div style = "text-indent: 6em">CollatzFrame myFrame2 = new CollatzFrame();<br></div>
												<div style = "text-indent: 4em">}<br></div>
											}<br>
											<br>
											import javax.swing.*;<br>
											import java.awt.*;<br>
											import java.awt.event.*;<br>
											import java.io.*;<br>
											/**<br>
											 * Una semplice finestra con:<br>
											 * Una casella di testo<br>
											 * Un'area di testo (non editabile)<br>
											 * Due pulsanti: uno per generare la sequenza e scriverla nell'area di testo<br>
											 * ed uno per cancellare il contenuto dell'area di testo<br>
											 * <br>
											 * @author Alessandro Monticelli <br>
											 * @version 19.12.2019<br>
											 */<br>
											public class FiboFrame extends JFrame<br>
											{<br>
												<div style = "text-indent:2em">//Componenti grafici<br></div>
												<div style = "text-indent:2em">JTextField tf;<br></div>
												<div style = "text-indent:2em">JTextArea ta;<br></div>
												<div style = "text-indent:2em">JButton scrivi,cancella, aggiungi;<br></div>
												<div style = "text-indent:2em">JPanel p1,p2,p3,p4;<br></div>
												<div style = "text-indent:2em">JScrollPane sp;<br></div>
												<div style = "text-indent:2em">JLabel l;<br></div>
												<div style = "text-indent:2em">/**<br></div>
												<div style = "text-indent:2em"> * Costruttore degli oggetti di classe  FiboFrame<br></div>
												<div style = "text-indent:2em"> */<br></div>
												<div style = "text-indent:2em">public FiboFrame()<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	initComponent();<br></div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">private void initComponent()<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	//Istanzio gli elementi<br></div>
												<div style = "text-indent:4em">		tf = new JTextField(5);<br></div>
												<div style = "text-indent:4em">		ta = new JTextArea();<br></div>
												<div style = "text-indent:4em">		scrivi = new JButton("Scrivi");<br></div>
												<div style = "text-indent:4em">		cancella = new JButton("Cancella");<br></div>
												<div style = "text-indent:4em">		aggiungi = new JButton("Aggiungi");<br></div>
												<div style = "text-indent:4em">		p1 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p2 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p3 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p4 = new JPanel();<br></div>
												<div style = "text-indent:4em">		sp = new JScrollPane(ta);<br></div>
												<div style = "text-indent:4em">		l = new JLabel();<br></div>
												<div style = "text-indent:4em">		String s = "Scrivi il numero";<br></div>
												<div style = "text-indent:4em">		//Definizione layout<br></div>
												<div style = "text-indent:4em">		ta.setEditable(false);<br></div>
												<div style = "text-indent:4em">		//this.getContentPane().setLayout(new BorderLayout());<br></div>
												<div style = "text-indent:4em">		this.setLayout(new BorderLayout());<br></div>
												<div style = "text-indent:4em">		l.setText(s);<br></div>
												<div style = "text-indent:4em">		p4.setLayout(new FlowLayout());<br></div>
												<div style = "text-indent:4em">		p4.add(l);<br></div>
												<div style = "text-indent:4em">		p4.add(tf);<br></div>
												<div style = "text-indent:4em">		p1.setLayout(new FlowLayout(FlowLayout.LEFT));<br></div>
												<div style = "text-indent:4em">		p1.add(p4);<br></div>
												<div style = "text-indent:4em">		p2.setLayout(new GridLayout(1,2));<br></div>
												<div style = "text-indent:4em">		p2.add(scrivi);<br></div>
												<div style = "text-indent:4em">		p2.add(cancella);<br></div>
												<div style = "text-indent:4em">		p2.add(aggiungi);<br></div>
												<div style = "text-indent:4em">		p3.setLayout(new FlowLayout(FlowLayout.LEFT));<br></div>
												<div style = "text-indent:4em">		p3.add(p2);<br></div>
												<div style = "text-indent:4em">		this.add(p1, BorderLayout.NORTH);<br></div>
												<div style = "text-indent:4em">		this.add(ta,BorderLayout.CENTER);<br></div>
												<div style = "text-indent:4em">		this.add(p3,BorderLayout.SOUTH);<br></div>
												<div style = "text-indent:4em">		//Registro listener<br></div>
												<div style = "text-indent:4em">		scrivi.addActionListener(new Scrivi());<br></div>
												<div style = "text-indent:4em">		cancella.addActionListener(new Canc());<br></div>
												<div style = "text-indent:4em">		aggiungi.addActionListener(new Aggiungi());<br></div>
												<div style = "text-indent:4em">		//Operazioni finali<br></div>
												<div style = "text-indent:4em">		//this.getContentPane().add(sp);<br></div>
												<div style = "text-indent:4em">		setSize(new Dimension(300,300));<br></div>
												<div style = "text-indent:4em">		setTitle("Successione di Fibonacci");<br></div>
												<div style = "text-indent:4em">		setResizable(false);<br></div>
												<div style = "text-indent:4em">		setLocation(new Point(200,200));<br></div>
												<div style = "text-indent:4em">		setVisible(true);<br></div>
												<div style = "text-indent:4em">		this.getContentPane().add(sp);<br></div>
												<div style = "text-indent:2em">	}<br></div>
												<br>
												<div style = "text-indent:2em">class Canc implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	public void actionPerformed(ActionEvent e)<br></div>
												<div style = "text-indent:4em">	{<br></div>
														<div style = "text-indent:6em">tf.setText("");<br></div>
														<div style = "text-indent:6em">ta.setText("");<br></div>
												<div style = "text-indent:4em">	}<br></div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">class Scrivi implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	public void actionPerformed(ActionEvent e)<br></div>
												<div style = "text-indent:4em">	{<br></div>
														<div style = "text-indent:6em">ta.setText("");<br></div>
														<div style = "text-indent:6em">String s = tf.getText();<br></div>
														<div style = "text-indent:6em">try{<br></div>
															<div style = "text-indent:8em">int a = 0;<br></div>
															<div style = "text-indent:8em">int b = 1;<br></div>
															<div style = "text-indent:8em">int n = Integer.parseInt(s);<br></div>
															<div style = "text-indent:8em">for (int i=0; i<n; i++)<br></div>
															<div style = "text-indent:8em">{<br></div>
																<div style = "text-indent:10em">ta.append(b+"\n");<br></div>
																<div style = "text-indent:10em">int c = a + b;<br></div>
																<div style = "text-indent:10em">a = b;<br></div>
																<div style = "text-indent:10em">b = c;<br></div>
															<div style = "text-indent:8em">}<br></div>
														<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">catch (NumberFormatException nfe)<br></div>
														<div style = "text-indent:6em">{ta.setText("Errore! Inserire un numero intero");}<br></div>
														<div style = "text-indent:6em">finally {<br></div>
															<div style = "text-indent:8em">tf.setText("");<br></div>
														<div style = "text-indent:6em">}<br></div>
												<div style = "text-indent:4em">	}<br></div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">class Aggiungi implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	public void actionPerformed(ActionEvent e)<br></div>
												<div style = "text-indent:4em">	{<br></div>
														<div style = "text-indent:6em">try<br></div>
														<div style = "text-indent:6em">{<br></div>
															<div style = "text-indent:8em">File Fibonacci = new File("Fibonacci.txt");<br></div>
															<div style = "text-indent:8em">FileWriter fw = new FileWriter(Fibonacci);<br></div>
															<div style = "text-indent:8em">BufferedWriter fOut = new BufferedWriter(fw);<br></div>
															<br>
															<div style = "text-indent:8em">try<br></div>
															<div style = "text-indent:8em">{<br></div>
																<div style = "text-indent:10em">fOut.write(ta.getText());<br></div>
															<div style = "text-indent:8em">}<br></div>
															<div style = "text-indent:8em">catch(Exception x){}<br></div>
															<div style = "text-indent:8em">fOut.flush();<br></div>
															<div style = "text-indent:8em">fOut.close();<br></div>
														<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">catch(IOException ioe){}<br></div>
												<div style = "text-indent:4em">	}<br></div>
												<div style = "text-indent:2em">}<br></div>
											}<br>
											<br>
											import javax.swing.*;<br>
											import java.awt.*;<br>
											import java.awt.event.*;<br>
											import java.io.*;<br>
											/**<br>
											 * Una semplice finestra con:<br>
											 * Una casella di testo<br>
											 * Un'area di testo (non editabile)<br>
											 * Due pulsanti: uno per generare la sequenza e scriverla nell'area di testo<br>
											 * ed uno per cancellare il contenuto dell'area di testo<br>
											 * <br>
											 * @author Alessandro Monticelli <br>
											 * @version 19.12.2019<br>
											 */<br>
											public class CollatzFrame extends JFrame<br>
											{<br>
												<div style = "text-indent:2em">//Componenti grafici<br></div>
												<div style = "text-indent:2em">JTextField tf;<br></div>
												<div style = "text-indent:2em">JTextArea ta;<br></div>
												<div style = "text-indent:2em">JButton scrivi,cancella, aggiungi;<br></div>
												<div style = "text-indent:2em">JPanel p1,p2,p3,p4;<br></div>
												<div style = "text-indent:2em">JScrollPane sp;<br></div>
												<div style = "text-indent:2em">JLabel l;<br></div>
												<div style = "text-indent:2em">/**<br></div>
												<div style = "text-indent:2em"> * Costruttore degli oggetti di classe  CollatzFrame<br></div>
												<div style = "text-indent:2em"> */<br></div>
												<div style = "text-indent:2em">public CollatzFrame()<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	initComponent();<br></div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">private void initComponent()<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	//Istanzio gli elementi<br></div>
												<div style = "text-indent:4em">		tf = new JTextField(5);<br></div>
												<div style = "text-indent:4em">		ta = new JTextArea();<br></div>
												<div style = "text-indent:4em">		scrivi = new JButton("Scrivi");<br></div>
												<div style = "text-indent:4em">		cancella = new JButton("Cancella");<br></div>
												<div style = "text-indent:4em">		aggiungi = new JButton("Aggiungi");<br></div>
												<div style = "text-indent:4em">		p1 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p2 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p3 = new JPanel();<br></div>
												<div style = "text-indent:4em">		p4 = new JPanel();<br></div>
												<div style = "text-indent:4em">		sp = new JScrollPane(ta);<br></div>
												<div style = "text-indent:4em">		l = new JLabel();<br></div>
												<div style = "text-indent:4em">		String s = "Scrivi il numero";<br></div>
												<div style = "text-indent:4em">		//Definizione layout<br></div>
												<div style = "text-indent:4em">		ta.setEditable(false);<br></div>
												<div style = "text-indent:4em">		//this.getContentPane().setLayout(new BorderLayout());<br></div>
												<div style = "text-indent:4em">		this.setLayout(new BorderLayout());<br></div>
												<div style = "text-indent:4em">		l.setText(s);<br></div>
												<div style = "text-indent:4em">		p4.setLayout(new FlowLayout());<br></div>
												<div style = "text-indent:4em">		p4.add(l);<br></div>
												<div style = "text-indent:4em">		p4.add(tf);<br></div>
												<div style = "text-indent:4em">		p1.setLayout(new FlowLayout(FlowLayout.LEFT));<br></div>
												<div style = "text-indent:4em">		p1.add(p4);<br></div>
												<div style = "text-indent:4em">		p2.setLayout(new GridLayout(1,2));<br></div>
												<div style = "text-indent:4em">		p2.add(scrivi);<br></div>
												<div style = "text-indent:4em">		p2.add(cancella);<br></div>
												<div style = "text-indent:4em">		p2.add(aggiungi);<br></div>
												<div style = "text-indent:4em">		p3.setLayout(new FlowLayout(FlowLayout.LEFT));<br></div>
												<div style = "text-indent:4em">		p3.add(p2);<br></div>
												<div style = "text-indent:4em">		this.add(p1, BorderLayout.NORTH);<br></div>
												<div style = "text-indent:4em">		this.add(ta,BorderLayout.CENTER);<br></div>
												<div style = "text-indent:4em">		this.add(p3,BorderLayout.SOUTH);<br></div>
												<div style = "text-indent:4em">		//Registro listener<br></div>
												<div style = "text-indent:4em">		scrivi.addActionListener(new Scrivi());<br></div>
												<div style = "text-indent:4em">		cancella.addActionListener(new Canc());<br></div>
												<div style = "text-indent:4em">		aggiungi.addActionListener(new Aggiungi());<br></div>
												<div style = "text-indent:4em">		//Operazioni finali<br></div>
												<div style = "text-indent:4em">		//this.getContentPane().add(sp);<br></div>
												<div style = "text-indent:4em">		setSize(new Dimension(300,300));<br></div>
												<div style = "text-indent:4em">		setTitle("Successione di Collatz");<br></div>
												<div style = "text-indent:4em">		setResizable(false);<br></div>
												<div style = "text-indent:4em">		setLocation(new Point(200,200));<br></div>
												<div style = "text-indent:4em">		setVisible(true);<br></div>
												<div style = "text-indent:4em">		this.getContentPane().add(sp);<br></div>
												<div style = "text-indent:2em">	}<br></div>
												<br>
												<div style = "text-indent:2em">class Canc implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	public void actionPerformed(ActionEvent e)<br></div>
												<div style = "text-indent:4em">	{<br></div>
														<div style = "text-indent:6em">tf.setText("");<br></div>
														<div style = "text-indent:6em">ta.setText("");<br></div>
												<div style = "text-indent:4em">	}<br></div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">class Scrivi implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em"> public void actionPerformed(ActionEvent e)</div>
												<div style = "text-indent:4em">{</div>
												<div style = "text-indent:6em">	ta.setText("");</div>
												<div style = "text-indent:6em">	String s = tf.getText();</div>
												<div style = "text-indent:6em">	try{</div>
														<div style = "text-indent:8em">int num = Integer.parseInt(s);</div>
														<div style = "text-indent:8em">do{</div>
															<div style = "text-indent:10em">ta.append(num + "\n");</div>
															<div style = "text-indent:10em">if (num%2==0)</div>
															<div style = "text-indent:12em">	num = num/2;</div>
															<div style = "text-indent:10em">else</div>
															<div style = "text-indent:12em">	num = 3*num+1;</div>
														<div style = "text-indent:8em">} while (num!=1);</div>
														<div style = "text-indent:8em">ta.append(num + "\n");</div>
												<div style = "text-indent:6em">	}</div>
												<div style = "text-indent:6em">	catch (NumberFormatException nfe)</div>
												<div style = "text-indent:6em">	{}</div>
												<div style = "text-indent:4em">}</div>
												<div style = "text-indent:2em">}<br></div>
												<br>
												<div style = "text-indent:2em">class Aggiungi implements ActionListener<br></div>
												<div style = "text-indent:2em">{<br></div>
												<div style = "text-indent:4em">	public void actionPerformed(ActionEvent e)<br></div>
												<div style = "text-indent:4em">	{<br></div>
														<div style = "text-indent:6em">try<br></div>
														<div style = "text-indent:6em">{<br></div>
															<div style = "text-indent:8em">File Fibonacci = new File("Fibonacci.txt");<br></div>
															<div style = "text-indent:8em">FileWriter fw = new FileWriter(Fibonacci);<br></div>
															<div style = "text-indent:8em">BufferedWriter fOut = new BufferedWriter(fw);<br></div>
															<br>
															<div style = "text-indent:8em">try<br></div>
															<div style = "text-indent:8em">{<br></div>
																<div style = "text-indent:10em">fOut.write(ta.getText());<br></div>
															<div style = "text-indent:8em">}<br></div>
															<div style = "text-indent:8em">catch(Exception x){}<br></div>
															<div style = "text-indent:8em">fOut.flush();<br></div>
															<div style = "text-indent:8em">fOut.close();<br></div>
														<div style = "text-indent:6em">}<br></div>
														<div style = "text-indent:6em">catch(IOException ioe){}<br></div>
												<div style = "text-indent:4em">	}<br></div>
												<div style = "text-indent:2em">}<br></div>
											}<br>								
										</div>
									</div>
								</li>
							</ul>	
						</li>
					</ul>	
			</div>
      </div>
    	<div class="w3-dropdown-hover w3-block w3-right-align w3-bottom">
			<div class="w3-block w3-right-align w3-tiny w3-opacity" style = "position: relative; right:3px">info sito</div>
			<div class = "w3-dropdown-content w3-bottom"><div class = "w3-teal w3-opacity">developed by: Alessandro Monticelli CSS by:
				<a href = "https://www.w3schools.com/w3css/">w3.css</a>&nbsp;</div>
			</div>
		</div>	
	</body>
</html>