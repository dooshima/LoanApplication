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
    <div class="container">
        <div class="form-group row">
         
            <form method="GET" action="{{ route('calculate_money') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                @csrf   
                     <div class="form-group">

                  <label for="reason"  class="col-sm-2 col-form-label">Reason:</label>
                 <input type="reason" class="form-control form-control-lg" name="reason"  value="" placeholder="Buy a Car" required><br>
                     </div>
       

                     <div class="form-group">
                        <label for="recipient"  class="col-sm-2 col-form-label">Recipient:</label>
                        <input type="text" class="form-control form-control-lg" name="recipient" value="RCP_ue5rqonqulysr6p" placeholder="RCP_t0ya41mp35flk40" required>
                      </div>


                     <div class="form-group">

                  <label for="amount" class="col-sm-2 col-form-label">Amount:</label>
                  <input type="amount" name="amount" value="" placeholder="50000" class="form-control form-control-lg" required><br>
                     </div>

                     <div class="form-group">

                        <label for="days"  class="col-sm-2 col-form-label">Durations:</label>
                        <input type="days" name="days" value="" placeholder="1 Month" class="form-control form-control-lg" required><br>
                           </div>

                  <button type="submit" onclick="window.location='{{ url("takeloan") }}'" class = "btn btn-primary">Transfer</button>

             </form>
            </div>
            </div>
                </div>
            </div>
 
</body>
</html>