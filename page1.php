<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
        /* @media(max-width: 500px){

            body{
                background-color: aqua;
            }
        }

        @media(min-width: 501px){

body{
    background-color: red;
}
} */
    </style>
</head>
<body>

    <!-- Headings -->

    <h1>Heading One</h1>
    <h2>Heading Two</h2>
    <h3>Heading Two</h3>
    <h4>Heading Two</h4>
    <h5>Heading Two</h5>
    <h6>Heading Two</h6>

    <!-- Links -->

    <a href="http://page2.html">Page 2</a>
    <a href="http://page3.html">Page 3</a>

    <!-- Images -->

    <img src="" alt="">
    <img src="./image1.jpg" alt="This is I Image" height="100">

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

    <table>
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
            <tr>
                <td>10</td>
                <td>Yousuf AL Hadhrami</td>
                <td>Izki</td>
                <td>yousuf@gmail.com</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
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
        <div>
            <label for="id">ID</label>
            <input type="text" name="id">
        </div>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
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

        <input type="submit" value="Save">


    </form>
    

    
</body>
</html>