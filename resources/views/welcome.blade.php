<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<a href="{{ url ('/home') }}">Home </a>
<h1>Hello from code online ...!</h1>

<h3>Products</h3>
<a class="btn-primary float-right mb-4"  href="{{url ('/add-product')}}"> >Add Product</a>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Category_ID</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($products as product)

    <tr>
      <th scope="row">{{$product->$id}}</th>
      <td>{{$product->$title}}</td>
      <td>{{$product->$price}}</td>
      <td>{{$product->$category_id}}</td>
      <div>
      <td style="display:flex"><a href="{{url ('/edit-product/'.$product)->id}}"class="btn btn-primary">Edit</a>
      </div>
      <form action="{{url ('delete/{product}.$product->id')}}" method="post">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <button class="btn btn- danger" type="submit">Delete</button>
      </form></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>