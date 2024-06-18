<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Book Details</h1>

    <table width='100%' class="table">
        <tr>
            <th>language_name</th>
            <th>publisher_name</th>
            <th>title</th>
            <th>num_pages</th>
            <th>published_date</th>
            <th>price</th>
        </tr>
        <tr>
            <td>{{ $language }}</td>
            <td>{{ $publisher }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->num_pages }}</td>
            <td>{{ $data->published_date }}</td>
            <td>{{ $data->price }}</td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
