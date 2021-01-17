<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

         
    <title>Document</title>
</head>
<body>
    

    {{-- {{$result}}  --}}
    <form method="GET" action="{{ route('calculate_default') }}" accept-charset="UTF-8" class="form-horizontal" role="form">


    <h3>Your account has been credited with your loan</h3>
    <p>click here to check for your monthly charges</p>
    <button type="submit" onclick="window.location='{{ url("display") }}'" class = "btn btn-primary">Your Charges</button>
    </form>
</body>
</html>