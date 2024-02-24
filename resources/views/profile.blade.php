<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
        #intro{
            color: black;
        }
        #app{
           background-color:  #757575;
           
        }
        #id{
            color:red;
        }
    </style>
</head>
<body>
    <div id="app">
    <header-component></header-component>
    <br>
    <br>
    <h1 id="intro"><i>Hi<span id="id"> {{$name}}</span> </i></h1>
    <profile-component name="{{$name}}"></profile-component>
    </div>
   

</body>
</html>