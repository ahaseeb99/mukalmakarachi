<html lang="en-US">
  <head>
      <meta charset="utf-8" />
   <?php
      $order = Con::order($id);
      $customer = unserialize($order->address); 
    ?>
    
  </head>
  <body>
      <p>Thank You For Your Order .Your Order Has Been Received. </p>
  </body>
</html>