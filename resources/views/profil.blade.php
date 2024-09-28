<!DOCTYPE html>
<html lang="en">
<head>
@extends('frontend.main')    

    @section('container')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="style.css">
    

<body>
<center><h1> Pangeran Tu Ganteng ga sih :) </h1><br>
        <img src="img/pangeran2.jpg" alt="Pangeran Afdhol" height="300" width="200"></center><br>
        <center><button id='btn_iyaadong' onclick='alert("Hehehe makasih banget loh :) ")'>Ganteng dong </button>&nbsp;
        <button id='btn_dih_najis' onclick='dihnajis(this)' style='position:absolute'>Dih najis</button></center>
    </body>
    <script>
        function dihnajis(id){
            var iyaadong = document.getElementById('btn_iyaadong');
            var i = Math.floor(Math.random()*300)+1;
            var j = Math.floor(Math.random()*100)+iyaadong.offsetTop;
            id.style.left = i+'px';
            id.style.top = j+'px';
        }
    </script>
    <script src = "js/script.js"></script>
    </head>
    @endsection
</body>
</html>