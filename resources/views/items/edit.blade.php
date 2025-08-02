<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Item</title>
</head>
<body>
    <h1>Create an Item</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div>
        <form action="{{route('item.update', ['item' => $item])}}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Item Name:</label>
                <input type="text" id="name" name="name" value="{{$item->name}}">
            </div>
            <div>
                <label for="name">Item Quantity:</label>
                <input type="text" id="quantity" name="quantity" value="{{$item->quantity}}" >
            </div>
            <div>
                <label for="name">Item Price:</label>
                <input type="text" id="price" name="price" value="{{$item->price}}">
            </div>
            <div>
                <label for="name">Item Description:</label>
                <input type="text" id="description" name="description" value="{{$item->description}}">
            </div>
            <div>
                <button type="submit">Update Item</button>
            </div>
        </form>
    </div>
</body>
</html>