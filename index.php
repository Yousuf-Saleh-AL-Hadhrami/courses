<!DOCTYPE html>
<html lang="eng" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <!-- External Style -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Internal Style -->
    <!-- <style>
        h1{
          color: blue;  
        }
    </style> -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <i class="fa-solid fa-house"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- Headings -->

    <!-- Inline Style -->
    <!-- <h1 style="color:red;">Heading One</h1> -->
<div class="container">

    <h1 class="heading1" style="color:green;">Heading One</h1>
    <h2>Heading Two</h2>
    <h3>Heading Two</h3>
    <h4>Heading Two</h4>
    <h5>Heading Two</h5>
    <h6>Heading Two</h6>

    <p>This is my paragraph</p>

    <!-- Links -->

    <a href="http://page2.html">Page 2</a>
    <a href="http://page3.html">Page 3</a>

    <!-- Images -->

    <img src="" alt="">
    <img src="./images/image1.jpg" class="rounded" id="image1" alt="This is I Image" height="100">

    <!-- Lists -->

    <ul type="square">
        <li>HTML</li>
        <li>CSS</li>
        <li>JAVASCRIPT</li>
    </ul>

    <ol>
        <li>MYSQL</li>
        <li>SQLSERVER</li>
        <li>ORACLE</li>
    </ol>

    <!-- Tables -->
<div class="alert alert-success">Success Message</div>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr class="bg-secondary">
                <td>10</td>
                <td>Yousuf AL Hadhrami</td>
                <td>Izki</td>
                <td>yousuf@gmail.com</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="btn btn-sm btn-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"> Footer</td>
            </tr>
        </tfoot>
    </table>

    <!-- Form -->

    <form action="" method="post">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" name="id">
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div>
            <label for="address">Address</label>
            <select name="address" id="address">
                <option value="">Select</option>
                <option value="1">Nizwa</option>
                <option value="2">Izki</option>
                <option value="3">Adam</option>
                <option value="4">Manah</option>
                <option value="5">Bahla</option>
            </select>
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
        </div>

        
        <div>
            <div>
                <input type="checkbox" name="skills" value="footabll"> 
                <label for="">Footabll</label>
            </div>
            <div>
                <input type="checkbox" name="skills" value="swimming"> Swimming
                <label for="">Footabll</label>

            </div>

            <div>
                <input type="checkbox" name="skills" value="reading"> Reading
                <label for="">Footabll</label>

            </div>

            <div>
                <input type="checkbox" name="skills" value="writting"> Writing
                <label for="">Footabll</label>

            </div>
        </div>

        <input type="submit" value="Save" class="btn btn-outline-primary">


</form>
</div>

<!-- <script src="./js/main.js"></script> -->
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>