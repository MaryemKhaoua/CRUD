
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    <h2>users</h2>
    <a class="btn btn-secondary" href="insert.php" role="button">Nouveau Contact</a>
    <br>
    <table class="table">
    <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
  <!-- php code -->
  <tr>
                <td>
                  <a class='btn btn-info btn-sm' href='edit.php?'>Edit</a>
                  <a class='btn btn-warning btn-sm' href='delete.php?'>delete</a>
              </td>
</tr>
        </tbody>
    </table>
    </div>
</body>
</html>