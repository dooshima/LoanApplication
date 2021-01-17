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
    <form method="POST" action="/take" accept-charset="UTF-8" class="form-horizontal" role="form">
        @csrf

        <div class="container">
            <br/><br/>
            <h1 >Do you want to take a loan</h1>
            <ul>
                <li>1 Month (30 days) : 30,000</li>
                <li>2 Month (60 days) : 50,000</li>
                <li>6 Month (180 days) : 100,000</li>

            </ul>
            <br/><br/>

          <button type="button" onclick="window.location='{{ url("initiate") }}'" class = "btn btn-primary">Apply Now!</button>

        </div>
    </form>
</body>
</html>