<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2>Register Form</h2>
<form method="post" action="../action/add.php">

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col"><label for="name">Name</label></th>
            <th scope="col"><label for="email">Email</label></th>
            <th scope="col"><label for="phone">Phone</label></th>
            <th scope="col"><label for="password">Password</label></th>
            <th scope="col">
                <button class="btn btn-primary" type="submit" onclick="confirm('ARE YOU SURE?')">ADD</button>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="name" id="name"></td>
            <td><input type="text" name="email" id="email"></td>
            <td><input type="text" name="phone" id="phone"></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        </tbody>
    </table>

</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>
