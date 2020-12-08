<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo.css">
    <link rel="stylesheet" href="../Templates/css/stylo.css">
    <title>Document</title>

    <style type="text/css">
        
        .etiquetas  {
            margin: left;
            width: 200px;
            height: 1000px;
            background: lightgrey;
        }

        .cuadros  {
            margin-top: center;
            float: center;
            width: 400px;
            height: 500px;
            background: lightgrey;
        }

      
    </style>

    
</head>



<body>
    <?php include_once 'layouts/appBar.html'; ?>

   

    <div class= "etiquetas">    
        <div class= "etiqueta">
                    <form>
                            <p>
                                Elige tu categoria:<br>
                                <label><input type="radio" name="etiqueta" value="mM"> mas barato al mas caro</label><br>
                                <label><input type="radio" name="etiqueta" value="Mm" checked> mas caro al mas barato</label><br>
                                <label><input type="radio" name="etiqueta" value="aZ"> A-Z</label><br>
                                <label><input type="radio" name="etiqueta" value="Za"> Z-A</label>
                            </p>
                        </form>   
            </div>
          
    </div>    

         <div class= "cuadros">
            

        </div>
    



</body>


</html>

