<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <h1 style="text-align: center;">Registration Form</h1>
      <form action="" method="post" enctype="multipart/form-data"  class="form-group container">
        @csrf
        <input type="text" name="name" id="" placeholder="enter your name" class="form-control">
        <input type="email" name="email" id="" placeholder="enter your email" class="form-control">
        <input type="file" name="image" id="" class="form-control">
        <input type="submit" value="Register" name="register" class="form-control btn btn-primary">
      </form>
</body>
</html>