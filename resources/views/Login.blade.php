<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
   <style>
    #app{
        margin:50px;
        display:grid;
        background-color: black;
    }
    body{
        background-color: black;
    }
   </style>
</head>
<body>
    <div id="app">
        
        <header-component></header-component>
        <br>
        <br>
        <br>
        <form-component></form-component>
    </div>
</body>
</html>