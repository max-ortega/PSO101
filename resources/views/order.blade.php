<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMPDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark">
        <div class="container">
            <h1 class="py-3 text-white">DOMPDF</h1>
        </div>
    </div>

    <div class="container">
        <div class="py-2">
            <a href="{{url('/download-orders')}}" class="btn btn-primary">Download PDF</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th>IDasd</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>   
            @if($orders->isNotEmpty())
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('m/d/Y')}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>

    <?php
    // Database add operation code here
    ?>
    
</body>
</html>