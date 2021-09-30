<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package-Insert</title>
</head>

<body>
    <div class="container">
        <h3>Table</h3>
    </div>
    <table class="table table-bordered">
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
            @foreach($value as $name)
            <tr>
                <td>{{$name->name}}</td>
                <td>{{$name->email}}</td>
                <td>{{$name->role}}</td>
                <td> <button type="button" class="btn btn-success btn-md" id="myBtn" data-toggle="modal" data-target="#edit-{{$name->id}}" data-show="true">Edit</button>
                    <!-- Modal -->
                    <div class="modal fade" id="edit-{{$name->id}}" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Option</h4>
                                </div>
                                <div class="modal-body">


                                    <form action="/update" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$name->id}}">
                                        <label for="name"> Name :</label>                                  
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

                    <button type="button" class="btn btn-danger btn-md" id="myBtn" data-toggle="modal" data-target="#myModal-{{$name->id}}" data-show="true">Delete</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{$name->id}}" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">DELETE Option</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure to Delete....?</p>
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
</body>

</html>
