<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
         body{
        background-color: black;
        } 
        #option{
            margin-top:200px;
        }
        #intro{
            color:wheat;
        }
    </style>
</head>
<body>
   
     <div id="app">
    <header-component></header-component>
    <br>
    <br>
    <h1 id="intro">Hi user please click on login if you are already member Or click on signup to first become the member of it</h1>
    <div id="option">
    <option-component></option-component>
    </div>
    </div> 
</body>
</html>