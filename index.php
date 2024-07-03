<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      body {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         background: #f0f0f0;
         font-family: Arial, sans-serif;
      }

      .container {
         width: 500px;
         background: #fff;
         border: 2px solid rgba(90, 89, 89, 0.2);
         box-shadow: 0 0 10px rgba(0, 0, 0, .2);
         border-radius: 10px;
         padding: 30px 40px;
         text-align: center;
      }

      .container h1 {
         font-size: 36px;
         margin-bottom: 20px;
      }

      .input-box {
         position: relative;
         width: 100%;
         height: 50px;
         margin: 20px 0;
         display: flex;
         align-items: center;
      }

      .input-box input {
         width: calc(100% - 40px);
         height: 100%;
         background: transparent;
         border: 2px solid rgba(255, 255, 255, .2);
         outline: none;
         border-radius: 40px;
         font-size: 16px;
         color: #000;
         padding: 0 20px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .input-box input::placeholder {
         color: #000;
      }

      .input-box .icon {
         position: absolute;
         right: 20px;
         top: 50%;
         transform: translateY(-50%);
         font-size: 16px;
      }

      .container button {
         width: 100%;
         height: 45px;
         border: none;
         outline: none;
         border-radius: 40px;
         font-size: 16px;
         color: #fff;
         background-color: #0078D7;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         cursor: pointer;
         font-weight: 700;
      }

      .container button:hover {
         background-color: #005bb5;
      }
   </style>
</head>
<body>

<div class="container">
   <h1>Payment</h1>
   <form action="process_payment.php" method="post">
      <div class="input-box">
         <input type="text" name="phone_number" placeholder="Mpesa Number" required>
      </div>
      <div class="input-box">
         <input type="number" name="amount" placeholder="Enter Amount" required>
      </div>
      <button type="submit">Pay</button>
   </form>
</div>

</body>
</html>
