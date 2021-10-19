<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Donate Now</title>
    <style>
        .card {
            width: 400px;
            background-color: #fff;
            border: none;
            border-radius: 12px
        }
        .card-title{
            text-align:center;
            font-size:20px;
        }
        .form-control {
            margin-top: 10px;
            height: 48px;
            border: 2px solid #eee;
            border-radius: 10px
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #efc950;
        }

        .agree-text {
            font-size: 12px
        }

        .terms {
            font-size: 12px;
            text-decoration: none;
            color: #efc950;
        }
        .confirm-button {
            height: 50px;
            border-radius: 10px;
            background-color:#efc950;
            border-color:#efc950;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" method="POST">
                <h6 class="card-title mb-3">Donate Money</h6>
                <h6 class="information mt-4" style="text-align:center">Please Raise your hand for poor families</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input class="form-control" name="amt" id="amt" type="number" placeholder="Amount"> </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Making this payment you agree to the</small> 
                <a href="#" class="terms">Terms & Conditions</a> 
            </div> <button class="btn btn-primary btn-block confirm-button" onclick="pay_now()">Pay Now</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function pay_now(){
            var name=jQuery('#name').val();  
            var amt=jQuery('#amt').val();
            var options = { 
                "key": "rzp_test_2lacIbsZGbr8KT",   
                "amount": amt*100,  
                "currency": "INR",    
                "name": name,    
                "description": "Test Transaction",    
                "image": "money_1.png",      
                "handler": function (response){   
                    // jQuery.ajax({
                    //     type:'post',
                    //     url:'Donate/payment_process.php',
                    //     data:"payment_id=" +response.razorpay_payment_id+ "&amt="+amt+"&name="+name,
                    //     success:function(result){
                    //         window.location.href="http://localhost/Donate/thank_you.php";
                    //     }
                    // });
                     
                    <?php
                    include('config.php');

                    if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name'])){
                        $payment_id=$_POST['payment_id'];
                        $amt=$_POST['amt'];
                        $name=$_POST['name'];
                        $payment_status="complete";
                        $added_on=date('Y-m-d h:i:s');

                        mysqli_query($mysql,"insert into payment(name,amount,payment_status,payment_id,added_on) values('$name','$amt','$payment_status','$payment_id','$added_on')");
                    }

                    ?>
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();    
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>