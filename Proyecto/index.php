<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link rel="stylesheet" href="Templates/css/stylo.css">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .mySlides {display:none;}
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <?php include_once 'views/layouts/appBar.html'; ?>
    
    
<div class="w3-container">
  <h2>Bienvenidos a la tienda oficial IPN</h2>
</div>

<div class="w3-content w3-display-container">

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promocion-Buen-Fin.png" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promo1.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promo2.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promo3.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promo4.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="Templates/Images/promo5.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides">
        <img src="https://i0.wp.com/liquidazona.com/wp-content/uploads/2017/10/pk1.gif?resize=554%2C189&ssl=1" style="width:100%">
    </div>

    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<div class="w3-container">
  <h2>Populares en electrónica</h2>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="https://image.freepik.com/foto-gratis/tv-gabinete-sala-estar-moderna-tiene-plantas-libro-fondo-azul-pared-re-3d_41470-42.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="https://d500.epimg.net/cincodias/imagenes/2020/10/02/smartphones/1601630546_816497_1601630595_noticia_normal.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="https://bitness.pe/wp-content/uploads/2020/02/zenbook.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<div class="w3-container">
  <h2>Lo mejor para tu hogar</h2>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="https://i.ytimg.com/vi/851v1F81uEk/maxresdefault.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="https://news.samsung.com/latin/wp-content/themes/sw_newsroom/download.php?id=9Z4%2B4mXCXspo8WJipQMxpA%3D%3D" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="https://vidaideasegura.com/wp-content/uploads/2016/09/09/l-tefal.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
</script>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
</body>
</html>