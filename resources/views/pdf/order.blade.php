<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .text1 {
    font-family: Arial, sans-serif;
    font-size: 12px;
  }
  .text2 {
    font-family: Arial, sans-serif;
    font-size: 12px;
    margin-top: 2px;
    margin-left: 29%;

  }
  table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
    .rect {
        border: 1px solid black;
        width: 6%;
        height: 2%;
        color: white;
        position: relative;
    }
    .txt1 {
        margin-top: -10%;
        margin-left: 10%;
    }
    .rect1 {
        border: 1px solid black;
        width: 6%;
        height: 2%;
        color: white;
        position: relative;
        margin-left: 55%;
        margin-top: -4%;
    }
    .rect2 {
        border: 1px solid black;
        width: 6%;
        height: 2%;
        color: white;
        position: relative;
        margin-left: 55%;
        margin-top: 2%;
    }
    .txt2 {
        margin-top: -6%;
        margin-left: 65%;
    }
    .txt3 {
        margin-top: 3.5%;
        margin-left: 65%;
    }
  
   
    




    </style>
</head>
<body >

    <div style="text-align: center">
        <h1>INSPECTION & ACCEPTANCE REPORT</h1>
        PAMANTASAN NG LUNGSOD NG MAYNILA <br>
        intramuros, manila <br><br><br>
    </div>

    <div class="text1">
    <pre>Supplier: ___________________________________________________    IAR No: _______________________ <br>
PO No: _____________________   BUR No: _____________________     PR No: ________________________ <br> 
Date:  _____________________  Invoice No: _____________________ <br>
Req Office:                           Date of Invoice: 
    </pre>
    </div>

    <table style="border: 1px solid black; text-align: center;">
            
        <tr>
            <th>Item No.</th>
            <th>Qty</th>
            <th>Unit</th>
            <th colspan="5" > </th>
            <th>Unit Price</th>
            <th>Amount</th>
        </tr>

    @if($orders->isNotEmpty())
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td >{{ $order->name }}</td>
                        <td>{{ $loop->iteration }}</td>
                        <td  colspan="5" >{{ $order->name }}</td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                @endforeach
            @endif
            <tr>
            <td colspan="5" style="text-align: center;">INSPECTION</td>
            <td colspan="5" style="text-align: center;">ACCEPTANCE</td>
            </tr>
    </table>

    <div>
        <pre>Date Inspected: ___________________       Date Received: ___________________  </pre>
    </div>
    <div class="rect"> </div>
    <div class="rect1"> </div>
    <div class="rect2"> </div>
    <div>
        <h5 class="txt1">Inspected, verified and found OK <br>
         to quantity and specifications</h5>

         <h5 class="txt2"> Complete </h5>

         <h5 class="txt3"> Partial </h5>

    </div>

    <div>
        <pre>  _______________________________          ________________________________ </pre>
        <pre>  Inspection Officer/Committee           Chief, Property & Supplies Office </pre>
    </div>
    
</body>
</html>




