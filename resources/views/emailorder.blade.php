<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Automatic Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">
    <style>
        td{
            border: 1px solid black;
        }
    </style>
<table align="center" border="1" cellpadding="0" cellspacing="0" width="95%%">
    <tr>
        <td align="center">
            <table align="center" border="1" cellpadding="0" cellspacing="0" width="600"
                   style="border-collapse: separate; border-spacing: 2px 5px; box-shadow: 1px 0 1px 1px #B8B8B8;"
                   bgcolor="#FFFFFF">
                <tr>
                    <td align="center" style="padding: 5px 5px 5px 5px;">
                        <a href="#" target="_blank">
                            <img src="https://www.designevo.com/res/templates/thumb_small/adorable-red-christmas-hat.png" alt="Logo" style="width:60px;border:0;"/>
                        </a>
                    </td>
                </tr>
                
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td style="width:100%;padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                   {{-- items goes here --}}
                                  
                                   <table style="width:100%;">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                        </tr>   
                                        @foreach ($data['order_items'] as $key => $item)
                                            <tr>
                                                <td style="text-align:center;padding-top:10px;">{{ $key+1 }}</td>
                                                <td style="padding-left:10px;padding-top:10px;">{{ $item['name'] }}</td>
                                                <td style="text-align:center;padding-top:10px;">{{ $item['qty'] }}</td>
                                                <td style="text-align:center;padding-top:10px;">{{ $item['price'] }}</td>
                                            </tr>
                                        @endforeach
                                       
                                   </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="float:right;padding-right: 30px;">
                            <label>Subtotal: &nbsp;&nbsp;<span style="float:right;">{{ $data['order']['subtotal']}}</span></label><br>
                            <label>Lavy Tax: &nbsp;&nbsp;<span style="float:right;">{{ $data['order']['lavytax']}}</span></label><br>
                            <label>Gov Tax: &nbsp;&nbsp;<span style="float:right;">{{ $data['order']['govtax']}}</span></label><br>
                            <label>Net Amount: &nbsp;&nbsp;<span style="float:right;">{{ $data['order']['netamount']}}</span></label><br>
                        </div>
                    </td>
                </tr>
              
               
            </table>
        </td>
    </tr>
</table>
</body>
</html>