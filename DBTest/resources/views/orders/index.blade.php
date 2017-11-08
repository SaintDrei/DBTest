<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>
    <h1>List of Orders</h1>
    <table border="1">
        <tr>
            <td>Order ID</td>
            <td>Order Number</td>
            <td>Customer Name</td>
            <td>Order Date</td>
            <td>TIN Number</td>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->order_no}}</td>
                <td>{{$order->order_date}}</td>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->tin_name}}</td>

            </tr>
    </table>
</body>
</html>