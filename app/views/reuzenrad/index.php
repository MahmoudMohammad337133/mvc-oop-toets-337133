<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuzenrad</title>
</head>
<body>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    padding: 1rem;
    width: 100%;
    margin: 0 auto;
    max-width: 1200px;
}

.title {
    text-align: center;
    margin-top: 2rem;
    color: blue;
}

.link {
    text-decoration: none;
    display: inline-block;
    color: blue;
    margin-bottom: 2rem;
}

.table {
    margin-bottom: 1rem;
    width: 100%;
}

.table th,
.table td {
    border: 1px solid #000;
    padding: 0.5rem;
    text-align: left;
}

</style>
    <div class="container">
        <h3 class="title"><?= $data['title']; ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Hoogte (m)</th>
                    <th>Land</th>
                    <th>Kosten</th>
                    <th>Aantal Passagiers</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
