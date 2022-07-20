<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<a href="{{ url ('/home') }}">Home </a>
<h1>Hello from code online ...!</h1>

<h3>Category</h3>
<a class="btn-primary float-right mb-4"  href="{{url ('/add-category')}}"> >Add category</a>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Created_at</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($categories as category)

    <tr>
      <th scope="row">{{$category->$id}}</th>
      <td>{{$category->$name}}</td>
      <td>{{$category->$created_at->diffForHumans()}}</td>
    
    </tr>
  </tbody>
</table>
</div>