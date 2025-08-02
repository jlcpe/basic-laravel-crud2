<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
</head>
<body>
    <h1>Items Page</h1>
    <div>
        @if(session()->has('success'))
            <p>{{session('success')}}</p>
        @endif
    </div>
    <div>
        <a href="{{route('item.create')}}">Create an Item</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Item Quantity</th>
                <th>Item Price</th>
                <th>Item Description</th>
                <th>Action</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a href="{{route('item.edit', ['item' => $item])}}">Edit</a>
                    <form action="">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>

</body>
</html>