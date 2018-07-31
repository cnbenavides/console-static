<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <title>Rewrite Bootstrap</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    <style>
/*         .list-group-item{
            padding: 0.24rem 1rem;
            margin: 7px 0;
        }

        .list-item-detail a{
            text-decoration: none;
            color:#333;
        }
        .list-item-detail a:hover{
            color: #809c2a;
        }
        .list-item-active{
            border-left: 4px solid #B5B786 !important; 
            transform: translateX(-4px);
            font-weight:600;
            color: #111;
        } */
    </style>
</head>
<body>
<!--     <section class="container-fluid sticky-top" style="    background: #36511f;box-shadow: 1px 1px 1px #2a3621;">
        <section class="d-flex justify-content-between" style="padding:13px 50px;">
            <div style="color: #fff;">
                <strong>
                    NEWTON
                </strong>
            </div>
            <div style="color: #fff;">
                <span>
                    Carlos Christian Benavides
                </span>
            </div>
        </section>
    </section> -->
    <section class="container-fluid" style="padding-top: 20px;">
        <section class="d-flex">
            <section style="width:175px;float:left;">
                <nav style="height: 100%;position: fixed;width: 175px;">
                    <ul class="nav list-group">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Users</a> 
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Groups</a> 
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Roles</a> 
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Permissions</a> 
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Modules</a> 
                        </li>
                    </ul>
                </nav>
            </section>
            <section style="width:25px;">
    
            </section>
            <section style="width: calc(100% - 200px);float:right;">
    
                <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
                <section class="pb-3">
                    <button class="btn btn-primary">Add user</button>
                    <button class="btn btn-danger" disabled>Delete user</button>
                </section>
            
                <section>
                    <div class="d-flex  justify-content-between align-items-center table-cabezera">
                        <form action="" class="flex-fill">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Find by user name">
                                </div>
                            </div>
                        </form>
                        <div>
                            <strong>Showing 2 results</strong>
                        </div>
                    </div>
                    <table class="table ">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <br>
                <section>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis minima excepturi quas consectetur harum, ullam voluptate sed distinctio atque provident accusamus quod iure laboriosam ex in nam impedit facilis?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis minima excepturi quas consectetur harum, ullam voluptate sed distinctio atque provident accusamus quod iure laboriosam ex in nam impedit facilis?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis minima excepturi quas consectetur harum, ullam voluptate sed distinctio atque provident accusamus quod iure laboriosam ex in nam impedit facilis?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis minima excepturi quas consectetur harum, ullam voluptate sed distinctio atque provident accusamus quod iure laboriosam ex in nam impedit facilis?
                    </p>
                    <br>
                    <h3>Z-index</h3>
                    <p>
                    Several Bootstrap components utilize z-index, the CSS property that helps control layout by providing a third axis to arrange content. We utilize a default z-index scale in Bootstrap that’s been designed to properly layer navigation, tooltips and popovers, modals, and more.
                    </p>
                    <p>
                    These higher values start at an arbitrary number, high and specific enough to ideally avoid conflicts. We need a standard set of these across our layered components—tooltips, popovers, navbars, dropdowns, modals—so we can be reasonably consistent in the behaviors. There’s no reason we couldn’t have used 100+ or 500+.
                    </p>
                    <p>
                    We don’t encourage customization of these individual values; should you change one, you likely need to change them all.
                    </p>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae aliquid commodi voluptates pariatur minima asperiores sunt hic veritatis nostrum accusantium, delectus aut adipisci alias praesentium molestiae velit officiis necessitatibus voluptate!
            
                            </p>
                        </div>
                    </div>
                    <br>
            </section>

        </section>
            
        </section>
    </section>

    <script src="/bootstrap/dist/js/jquery.min.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>