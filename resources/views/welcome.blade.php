<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Styles -->

</head>
<body>
<div class="container">
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" type="text">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" type="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" name="password" type="text">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
</body>
</html>
