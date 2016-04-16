	<link href="images/icon.jpg" rel="shortcut icon" />
	<link href="images/icon.jpg" rel="apple-touch-icon" />	
	<link href="styles/reset.css" rel="stylesheet" type="text/css" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" />
	<link href="styles/principal.css" rel="stylesheet" type="text/css" title="Principal" />	
	<link href="styles/secundario.css" rel="alternate stylesheet" title="Secundario" type="text/css" />		
	<link href="styles/pc.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" />
	<link href="styles/medio.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" />
	<link href="styles/peq.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)"/>
	<link href="styles/imprimir.css" rel="stylesheet" type="text/css" media="print"/>
	<link href='http://fonts.googleapis.com/css?family=Pirata+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="scripts/validaacceso.js"></script>
	<script type="text/javascript" src="scripts/validaregistro.js"></script>	
    <script type="text/javascript" src="scripts/ordena.js"></script>
	<script type="text/javascript" src="scripts/ordena2.js"></script>		
    <script type="text/javascript" src="scripts/selectorestilos.js"></script>
	<script type="text/javascript">
		function estilo(titulo) {
			var arrayLink = document.getElementsByTagName("link");
			for(var i = 0; i < arrayLink.length; i++) {				
				// Solo aquellas etiquetas link que hacen referencia a un estilo  y que no sea para impresion       
				if(arrayLink[i].getAttribute("rel") != null && arrayLink[i].getAttribute("rel").indexOf("stylesheet") != -1 && arrayLink[i].getAttribute("media") != "print") {					
					// Si tiene t?tulo es un estilo preferido o alternativo,  si no tiene t?tulo es un estilo predeterminado y siempre tiene que utilizarse                   
					if(arrayLink[i].getAttribute("title") != null && arrayLink[i].getAttribute("title").length > 0) {
						if(arrayLink[i].getAttribute("title") == titulo){
							arrayLink[i].disabled = false;
							setCookie("estilopag", titulo, 365);
						}
						else
							arrayLink[i].disabled = true;
					}
				}
			}
		}
	</script>
</head>
<body onLoad="leerEstilo();" onunload="guardarEstilo();">    
    <script type="text/javascript">
        var ultimavez = getCookie("ultimavez");
        if(ultimavez != null && ultimavez != "") {
            //document.writeln("Tu ultima visita fue: " + ultimavez);
            setCookie("ultimavez", Date(), 365);
        }
        else {
            //document.writeln("Bienvenido por primera vez a este sitio web");
            setCookie("ultimavez", Date(), 365);
        }
    </script>