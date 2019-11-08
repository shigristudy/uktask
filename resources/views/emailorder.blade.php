<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Companu Title</title>
<style type="text/css">

.style1 {color: #A92D3E}
.style2 {color: #000000}

</style>
</head>

<body style="margin:0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="center" valign="top">
                        <table width="650" border="0" cellspacing="0" cellpadding="5">
                            <tr>                              
                              <td width="159" align="center" valign="middle"><a href="#"> <img src="https://www.designevo.com/res/templates/thumb_small/adorable-red-christmas-hat.png" width="" height="" alt="Company name" border="0" /> </a> </td>
                              <td align="center" valign="middle"><div align="right"><img src="" width="353" height="51" alt="Contact Us" /></div></td>
                            </tr>
                        </table>
                  </td>
                </tr>
            </table>
            <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <table width="650" border="0" cellspacing="0" cellpadding="10">
                            <tr>
                                <td align="left" valign="top" style="font-size:12px; font-family:Tahoma, Geneva, sans-serif; color:#333;">
                                    <p>Dear <strong>CUSTOMER NAME</strong>, </p>
                                    <p>This is an automated note to let you know that we received your e-mail message.  Please do not 'reply' to this email directly. </p>

                                     <table width="650" border="0" cellspacing="1" cellpadding="5" style="background-color: #fff;">
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                     </table>
                                    <table width="650" border="0" cellspacing="1" cellpadding="5" style="background-color: #fff;">

                                                 
                                           <tbody>
                                              <tr>
                                                 <th>#</th>
                                                 <th style="text-align:left;">Name</th>
                                                 <th>Qty</th>
                                                 <th style="text-align:right;">Unit Price</th>
                                                 <th style="text-align:right;">Total Price</th>
                                              </tr>
                                              @foreach ($data['order_items'] as $key => $item)
                                              <tr>
                                                 <td style="text-align:center;padding-top:10px; border-top: 1px solid #e8e8e8;">{{ $key+1 }}</td>
                                                 <td style="padding-left:10px;padding-top:10px; border-top: 1px solid #e8e8e8;">{{ $item['name'] }}</td>
                                                 <td style="text-align:center;padding-top:10px; border-top: 1px solid #e8e8e8;">{{ $item['qty'] }}</td>
                                                 <td style="text-align:right;padding-top:10px; border-top: 1px solid #e8e8e8;">{{ $item['price'] }}</td>
                                                 @php
                                                    $t_p = $item['price'] * $item['qty'];
                                                @endphp
                                                 <td style="text-align:right;padding-top:10px; border-top: 1px solid #e8e8e8;">{{ number_format((float)$t_p, 3, '.', '') }}</td>
                                              </tr>
                                              @endforeach
                                              
                                           </tbody>
                                    </table>  
                                    <table width="650" border="0" cellspacing="1" cellpadding="5" style="background-color: #fff;">
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                     </table>   


                                     <table width="650" border="0" cellspacing="1" cellpadding="5" style="background-color: #fff; border-top: 2px solid #000" align="right">
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="1" cellpadding="5" style="background-color: #fff;" align="right">
                                                    <tr>
                                                        <td>Subtotal:</td>   
                                                        <td style="text-align: right;">{{ $data['order']['subtotal']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Levy Tax:</td>   
                                                        <td style="text-align: right;">{{ $data['order']['lavytax']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gov Tax:</td>   
                                                        <td style="text-align: right;">{{ $data['order']['govtax']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Net Amount:</strong></td>   
                                                        <td style="text-align: right;"><strong>{{ $data['order']['netamount']}}</strong></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>                          
                                </td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" style=" font-size:12px; font-family:Tahoma, Geneva, sans-serif; color:#333;"><div align="justify"><span class="style2">If you are not the intended recipient or have received this e-mail in error, please delete immediately. Any dissemination, distribution or copying of this message by any person other than the intended recipient is strictly prohibited. </span></div></td>
                            </tr>
                        </table>
                  </td>
                </tr>
            </table>
            <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr align="center">
                    <td style="color:#222; font-family:Tahoma, Geneva, sans-serif; font-size:14px;">
                       <p><strong>Tel: +999 XXXX XXXX  or email us at <a href="mailto:info@info.com" class="style1">info@info.com</a></strong></p>
                  </td>
              </tr>
                
                <tr align="center">
                    <td height="50" valign="middle" style="color:#999; font-family:Tahoma, Geneva, sans-serif; font-size:11px;"><table width="117" border="0" align="center" cellpadding="5" cellspacing="0">
                       <tr>
                        <td width="32"><a href="#" target="_blank" class="fb"> 
                          <img src="images/facebook.png" width="24" height="24" alt="" border="0"/> 
                        </a></td>
                        <td width="34"><a href="#" target="_blank" class="twitter"> <img src="images/twitter.png" alt="" width="24" height="24" border="0" /> </a></td>
                        <td width="49"><a href="#" target="_blank" class="instagram"> <img src="images/instagram.png" alt="" width="24" height="24" border="0" /> </a></td>
                        <td width="49"><a href="#" target="_blank" class="pinterest"> <img src="images/pinterest.png" alt="" width="24" height="24" border="0" /> </a></td>
                        <td width="49"><a href="#" target="_blank" class="pinterest"> <img src="images/linkedin.png" alt="" width="24" height="24" border="0" /> </a></td>
                        <td width="49"><a href="#" target="_blank" class="pinterest"> <img src="images/youtube_2.png" alt="" width="24" height="24" border="0" /> </a></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="center" style="background-color:#A92D3E;">
                    <td align="center">
                        <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr align="center">
                              <td height="30" valign="middle" style="color:#f9f9f9; font-family:Tahoma, Geneva, sans-serif; font-size:11px;"><p>Company Address goes here</p></td>
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




