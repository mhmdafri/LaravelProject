<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<h1>You can add product here</h1>
<div class="container">
<form method="post"  action="{{route ('add-product')}}">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control"  placeholder="Title">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="number" name="price" class="form-control"  placeholder="Price">
  </div>

  
  <select nam="category_id "class="form-control" id="exampleFormControlSelect1">
    @foreach($categories as category)  
    <option value="">{{category->name}}</option>
     @endforeach   
    </select>
  <button class="btn btn-primary md-3">Submit</button>
</form>
</div>