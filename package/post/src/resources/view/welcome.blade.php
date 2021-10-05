<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Package Welcome</title>
</head>

<body>
    <h1>Welcome</h1>

    <div class="container">
        <form action="/add-post" method="POST">
            @csrf
            <label for="name">Student Name :</label>
            <input type="text" name="name"><br><br>
            <span class="text" style="color: red;">@error('name'){{message}}@enderror</span>
            <label for="email">email-id :</label>
            <input type="email" name="email"><br><br>
            <span class="text" style="color: red;">@error('email'){{message}}@enderror</span>
            <label for="role">Role :</label>
            <input type="text" name="role"><br><br>
            <span class="text" style="color: red;">@error('role'){{message}}@enderror</span>
            <input type="submit">&nbsp;
            <button type="button"><a href="/view" style="text-decoration: none;color:chocolate">Edit</a></button>
        </form>
        <br><br>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>