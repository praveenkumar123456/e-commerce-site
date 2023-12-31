<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  

  <div class="container">
    <br>
    <h1 class="text-white bg-dark text-center">
      Upload Product Details</h1>
    <div class="col-lg-8 m-auto d-block">  
    <form action="products.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="user"> Name </label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="user"> Category </label>
        <input type="text" name="category" id="category" class="form-control">
      </div>
      <p>Product Description<br>
      <textarea name="description" rows="5" cols="50"">
      </textarea>
      <div class="form-group">
        <label for="file"> Product Photo </label>
        <input type="file" name="file" id="file" class="form-control">
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-success"> 
</p>
    </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>