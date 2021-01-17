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
           <div class="row">
                    <form method="GET" action="{{ route('acc_verify') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        @csrf

                     <label for="Anumber">Account number:</label>
                    <input type="number" class="form-control form-control-lg"  name="account_number" value="account_number" placeholder="Account Number" required><br>

                    <label for="Aname">Account name:</label>
                    <input type="text" id="formGroupExampleInput" name="account_name" 
                    placeholder="Account Name" required><br>

                     
                     <label for="Bcode">Bank Code:</label>
                     <input type="number" class="form-control form-control-lg" name="bank_code"
                     value="bank_code" placeholder="e.g 058, 067" required><br>
                        
                    <br/>
                        <input type="submit" name="verify" value="VERIFY" class = "btn btn-primary">
                </form>
               </div>

                   </div>
               </div>
           </div>
       </div>
       
 
</body>
</html>