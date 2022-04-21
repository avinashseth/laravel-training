<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title;?></title>
    <meta name="description" content="{{ $page_description }}">
    <meta 
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Manufacturer</td>
            <td>View</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->manu->name }}</td>
                <td><a href="{{ route('product.show', ['product'=>$product]) }}">View</a></td>
                <td><a href="{{ route('product.edit', ['product'=>$product]) }}">Update</a></td>
                <td>
                    <form method="post" action="{{ route('product.destroy', ['product'=>$product]) }}"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <p><a href="{{ route('product.create') }}">Add New Product</a></p>
</body>
</html>