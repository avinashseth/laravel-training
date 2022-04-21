<form method="post" action="{{ route('product.store') }}"> 
    @csrf
    <p>Product Name</p>
    <p><input type="text" name="product_name"></p>
    <p>Product Price</p>
    <p><input type="text" name="product_price"></p>
    <button type="submit">Add New Product</button>
</form>