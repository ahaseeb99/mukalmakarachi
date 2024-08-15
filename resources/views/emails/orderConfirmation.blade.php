
<?php

   $order = Con::order($id);
   
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>

<?php 

$customer = unserialize($order->address); 

?>
<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them.
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 10px;" bgcolor="#F44336">
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                            <h1 style="font-size: 21px; font-weight: 800; margin: 0; color: #ffffff;">Order Confirmation</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                                            <table cellspacing="0" cellpadding="0" border="0" align="right">
                                                <tr>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400;">
                                                        
                                                    </td>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 24px;"> 
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                  
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <a href="{{env('APP_URL')}}" ><img src="{{asset($_settings->app_big_logo)}}" width="125" height="120" style="display: block; border: 0px;" /></a><br>
                                        <p style="margin:0px" >Website: {{env('APP_URL')}}</p>
                                        <p style="margin:0px" >Email: {{$_settings->email}}</p>
                                        <p style="margin:0px" >Phone: {{$_settings->phone}}</p>
                                        <h2 style="padding-top:20px;font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Thank You For Your Order! </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style=";font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Your Order Has Been Received.You Will Receive a Delivery Confirmation From Us By Email.</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                  <td>
                                      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                          <tr>
                  
                                              <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                    <p style="margin:0px;font-weight: 800;">Order Details</p>
                                                    <p style="padding:0px;margin:0px" > Date:  {{$order->date->format('d M Y') }}</p>
                                                    <p style="padding:0px;margin:0px" >Order ID: #{{$order->id}}</p>
                                                    <p style="padding:0px;margin:0px" >Tracking ID: {{$order->tracking_id}}</p>
                                                    <p style="padding:0px;margin:0px" > Status: {{$order->status}}</p>
                                                    
                                                    <p style="padding-top:5px;margin:0px;font-weight: 800;">Payment Details</p>
                                                    <p style="margin:0px" >Payment Method: {{str_replace("_"," ",$order->payment_method) }}</p>
                                                    <p style="margin:0px" >Payment Status: @if($order->payment_status) {{'Paid'}}   @else {{'UnPaid'}} @endif</p>
                                                    
                                              </td>
                                              <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                    <p style="margin:0px;font-weight: 800;">Billing Details</p>
                                                    <p style="padding:0px;margin:0px" > Full Name:  {{$customer['name']}}</p>
                                                    <p style="padding:0px;margin:0px" > Email: {{$customer['email']}}</p>
                                                    <p style="padding:0px;margin:0px" >Phone: {{$customer['mobile']}}</p>
                                                    <p style="padding-top:5px;margin:0px;font-weight: 800;">Shipping Address</p>
                                                    <p style="margin:0px" >{{$customer['country']}}, {{$customer['city']}}{{$customer['state']}}, {{$customer['zip']}} {{$customer['address']}}</p>
                                              
                                              </td>
                                          </tr>
                                      </table>
                                  </td>
                                </tr>
                                
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="16.66666666666667%" align="center" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Item </td>
                                                <td width="16.66666666666667%" align="center" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Price </td>
                                                <td width="16.66666666666667%" align="center" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Discount </td>
                                                <td width="16.66666666666667%" align="center" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Tax </td>
                                                <td width="16.66666666666667%" align="center" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Total </td>
                                            </tr>
                                            @foreach($order->orderitems as $key => $item)
                                                <tr>
                                                    <td width="16.66666666666667%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {{$item->title}} 
                                                    ({{$item->qty}}) </td>
                                                    <td width="16.66666666666667%" align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> ${{$item->price}} </td>
                                                    <td width="16.66666666666667%" align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {{$item->discount}}% </td>
                                                    <td width="16.66666666666667%" align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> {{$item->tax}}% </td>
                                                    <td width="16.66666666666667%" align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> ${{$item->total}} </td>
                                                </tr>
                                            @endforeach
                                           
                                            <tr>
                                                <td colspan="4" width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> SubTotal </td>
                                                <td  align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> ${{$order->subtotal}} </td>
                                            </tr>
                
                                            <tr>
                                                <td colspan="4" width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Discount </td>
                                                <td  align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> {{$order->discount}}% </td>
                                            </tr>
                                    
                                            <tr>
                                                <td colspan="4" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Tax </td>
                                                <td width="25%" align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> {{$order->tax}}% </td>
                                            </tr>
                                            
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> ${{number_format($order->total,2)}} </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>