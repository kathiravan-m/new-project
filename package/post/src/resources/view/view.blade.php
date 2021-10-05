<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Package-Insert</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>




</head>

<body>
    <div class="container">
        <h3>Table</h3>
    </div>
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th colspan="3" style="text-align:center">Post details</th>
                <th rowspan="2" style="text-align:center; padding:50px;">Action</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>email-id</th>
                <th>Role</th>

            </tr>
        </thead>
        <tbody>
            @foreach($getUser as $name)
            <tr>
                <td>{{$name->name}}</td>
                <td>{{$name->email}}</td>
                <td>{{$name->role}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-{{$name->id}}">
                        Edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="edit-{{$name->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/update" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$name->id}}">
                                        <label for="name"> Name :</label>
                                        <input type="text" name="name" value="{{$name->name}}"><br><br>
                                        <label for="email">email-id :</label>
                                        <input type="email" name="email" value="{{$name->email}}"><br><br>
                                        <label for="role">Role :</label>
                                        <input type="text" name="role" value="{{$name->role}}"><br><br>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- delete modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$name->id}}">
                        Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="delete-{{$name->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are u sure to delete..??
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"><a href="/delete/{{$name->id}}" style="text-decoration: none;">Yes</a></button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-info">
        <a href="/welcome" style="text-decoration: none; color:red;">Back</a>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>