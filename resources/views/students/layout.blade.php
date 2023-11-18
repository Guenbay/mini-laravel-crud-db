//https://getbootstrap.com/docs/5.3/getting-started/download/
//blog\resources\views\students\layout.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
        !-->

</head>
<body class="bg-success p-2 text-dark bg-opacity-25">
        {{print_r(URL(''))}}

    <div class="container">
        <div >
            <img src="{{URL('images/logo2.png')}}" class="opacity-50" style="width: 200px; height: 200px"alt="logo">
            @yield('content')
            <img src="{{URL('images/tempel.jpg')}}" class="img-fluid" alt="tempel">
        </div>    
    </div>
   
</body>
</html>