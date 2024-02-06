<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>laba 5</title>
</head>

<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 border-bottom">
            <a href="https://github.com/a1ekseevkiri11/laba_python_web" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <img src="img\github.svg">
                <span class="fs-4">a1ekseevkiri11</span>
            </a>
        </div>
    </header>
    <main>
        <div class="album bg-body-tertiary" style="min-height: 93vh;">
            <form action="create.php" method="post" style="padding: 2%;">
                <label for="name">Имя:
                    <input class="form-control" type="text" name="name" />
                </label>
                <label for="comment">Комментарий:
                    <input class="form-control" type="text" name="comment" />
                </label>
                <button type="submit" class="btn btn-primary mb-2">Добавить</button>
            </form>
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "reviews";

                    $conn = new mysqli($server, $username, $password, $dbname);

                    if ($conn->$connection_error) {
                        die($conn->$conection_error);
                    }
                    $sql = "SELECT name, comment FROM review";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <div class='col'>
                                <div class='card shadow-sm'>
                                    <div class='card-body'>
                                        <h4>" . $row["name"] . "</h4>
                                        <p class='card-text'>" . $row["comment"] . "</p>
                                        <div class='d-flex justify-content-between align-items-center'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    } else {
                        echo "Напиши отзыв";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>