<html>
    <head>
        <meta charset="utf-8"> 
    </head>
    <body id="demo"> 
        <input onkeyup="">
        <datalist>
            <option></option>
        </datalist>
    </body>
    <script>
        function alerte(req){
		alert("Erreur N° " + req.status + "   " +req.statusText);
        }

        function affiche(req){
            // conversion de la chaine de caractères reçu en Json
            let temp = JSON.parse(req.responseText);
            //Creation des 12 lignes du tableau
            for (let i=0;i<12;i++){
            cl(`Mois: ${temp[i].mois} Minimum: ${temp[i].tp.getMin()} Maximum ${temp[i].tp.getMax()} Moyenne ${temp[i].tp.getMoy().toFixed(2)}`);
            }
        }
        onload=$get("json.php",null,affiche,alerte);
    </script>
</html>