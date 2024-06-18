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
    <h1>Edit Data</h1>
    <div class="container w-50">
        <form action="{{ route('todo.update', $data->book_id) }}" method='post'>
            @csrf
            @method('put')
    
            <label for="language_id" class="form-label">Language</label>
            <select name="language_id" class="form-select">
    
                @foreach ($language as $item)
                    <option {{ $data->language_id == $item->language_id ? 'Selected' : '' }}
                        value="{{ $item->language_id }}">
                        {{ $item->language_name }}
                    </option>
                @endforeach
            </select>
    
            <label for="publisher_id" class="form-label">publisher</label>
            <select name="publisher_id" value="{{ $data->publisher_id }}" class="form-select">
                @foreach ($publisher as $item)
                    <option value="{{ $item->publisher_id }}">{{ $item->publisher_name }}</option>
                @endforeach
            </select>
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" value="{{ $data->title }}" class="form-control">
    
            <label for="num_pages" class="form-label">number of pages</label>
            <input type="number" name="num_pages" value="{{ $data->num_pages }}" class="form-control">
    
            <label for="published_date" class="form-label">published date</label>
    
            <input class="form-control" type="date" name="published_date" value={{ $data->published_date }}>
    
            <label for="price" class="form-label">price</label>
            <input class="form-control" type="number" name="price" value="{{ $data->price }}">
    
            <input class="btn btn-success mt-2" type="submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
