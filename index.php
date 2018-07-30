<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <title>Rewrite Bootstrap</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
</head>
<body style="padding: 50px;" class="container">
    <section style="display:flex;justify-content:space-between;">
        <section>
            <div>
                <a class="btn btn-primary" 
                    href="#casa"
                    data-toggle="modal" 
                    data-target="#exampleModal"
                    >
                    <span region-container="text">
                        Add user to groups
                    </span>
                </a>
                
            </div>
            <br>
            <div>
                <button class="btn btn-primary">
                    <span region-container="text">
                        Add user to groups
                    </span>
                </button>
                
            </div>
            <br>
            <div>
                <button class="btn btn-primary" disabled>Add user to groups</button>
            </div>
        </section>
        <section>
            <div>
                <a class="btn btn-danger" 
                    href="#casa"
                    >
                    <span region-container="text">
                        Add user to groups
                    </span>
                </a>
                
            </div>
            <br>
            <div>
                <button class="btn btn-danger">
                    <span region-container="text">
                        Add user to groups
                    </span>
                </button>
                
            </div>
            <br>
            <div>
                <button class="btn btn-danger" disabled>Add user to groups</button>
            </div>
        </section>
        <section>
            <div>
                <a class="btn btn-default" 
                    href="#casa"
                    >
                    <span region-container="text">
                        Add user to groups
                    </span>
                </a>
                
            </div>
            <br>
            <div>
                <button class="btn btn-default">
                    <span region-container="text">
                        Add user to groups
                    </span>
                </button>
                
            </div>
            <br>
            <div>
                <button class="btn btn-default" disabled>Add user to groups</button>
            </div>
        </section>
        <section>
            <div>
                <a href="#" class="btn-link">
                    Add user to groups
                </a>
            </div>
            <div>
                <button>Add user to  group</button>
            </div>
            <div>
                <button class="btn btn-success">Add user to group</button>
            </div>
        </section>
    </section>
    <br>
    <hr>
    <section>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <script src="/bootstrap/dist/js/jquery.min.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>