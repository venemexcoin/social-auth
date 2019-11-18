<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("fron/css/app.css")}}">
    <style>
 div {
    width: 200px;
    height: 200px;
    background: #dddddd;
    display: inline-block;
    margin-right: 10px;
    border: 1px solid #AAAAAA;
}

.azul {
    background: #0074D9;
    border: 1px solid #000;
}

.rojo {
    background: #FF4136;
    border: 1 solid #000;
}
    </style>
</head>
<body>


      <section id="contenedor">
        <a href="http://www.venemexcoin.com" id="enlace">venemexcoin</a>
        <div class=""></div>
        <div class=""></div>
      </section>


<script>
    var elemento = document.createElement("div");
    var padre = document.getElementById("contenedor");
    var referencia = document.getElementsByTagName("div")[0];
    elemento.setAttribute("class", "azul");
    //document.body.appendChild(elemento);
    padre.insertBefore(elemento, referencia);


</script>

</body>
</html>
