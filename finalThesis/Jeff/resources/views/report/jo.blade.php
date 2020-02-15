<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>
  <header>
    <center>Job Order</center>
  </header>
  <table width="100%">
    <tr>
        <td valign="top"><img src="#" alt="" width="150"/></td>
        <td align="right">
            <h3>Jeff's Off Road</h3>
            <pre>
                {{$araw}}
                Company address
                Tax ID
                phone
                fax
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>Client:</strong> {{$clients->lastname}},{{$clients->firstname}}</td>
        <td><strong></strong></td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity Ordered</th>
        <th>Unit Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $row)  
      <tr>
        <th scope="row">1</th>
        <td>{{$row['product_name']}}</td>
        <td align="right">{{$row['quantity']}}</td>
        <td align="right">{{$row['retail_price']}}</td>
        <td align="right">{{$row['quantity']*$row['retail_price']}}</td>
      </tr>
    </tbody>
    @endforeach

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal $</td>
            <td align="right">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax $</td>
            <td align="right">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">$ 1929.3</td>
        </tr>
    </tfoot>
  </table>

</body>
</html>