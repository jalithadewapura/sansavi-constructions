<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/mpdf.css"/>

</head>
<body>
    <!-- page header  -->
    <div class="header">
        <div class="logo">
            <img src="./img/Ransavi-Construction-Logo.png"/>
        </div>
        <div class="details">
            <h3>Ransavi Construction (Pvt) Ltd</h3>
            <p>No. 84,</p>
            <p>Koralawella,Moratuwa,</p>
            <p>Sri Lanka.</p>
        </div>
    </div>
    <hr>
    <h2>Purchase Order</h2>
    <br>
    <p>Site Name : {{ $site->name }}</p>
    <p>Stock Keeper : {{ $site->stockKeeper->name?? '' }}</p>
    <p>Delivery Date : {{ $material_request_note->delivery_date }}</p>

    <table class="minimalistBlack" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Unit Price (Rs)</th=>
                <th>Total Cost (Rs)</th=>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
            ?>        
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$material->item->name}}</td>
                    <td>{{$material->quantity}}{{$material->item->measuringUnit->name}}</td>
                    <td style="text-align: right;" >{{ number_format((float)$material->item->price, 2, '.', ',') }}</td>
                    <td style="text-align: right;" >{{ number_format((float)$material->cost, 2, '.', ',') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <p style="padding-bottom: 20px;">Certified By :</p>
    <p>...........................</p>

</body>
</html>

