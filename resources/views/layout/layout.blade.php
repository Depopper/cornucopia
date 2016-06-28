<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Signika' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
   <div class="header">
        <span id="brand"><a href="{{url('/')}}">Cornucopia</a></span>
   </div>
   <div class="container">
       <div class="search">
           <input id="search" type="text" placeholder="I know what do you think ...">
       </div>
       @yield('content')
   </div>
    <div class="footer">

    </div>
</body>
</html>
