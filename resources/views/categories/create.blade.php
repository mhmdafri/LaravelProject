<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<h1>You can add category here</h1>
<div class="container">
<form method="post"  action="{{route ('add-category')}}">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter category name">
  </div>
  
  
  <button class="btn btn-primary md-3">Submit</button>
</form>
</div>