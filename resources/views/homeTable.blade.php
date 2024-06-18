<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Books Table</h1>
    <a class="btn btn-success m-2" href={{route('todo.create')}}>Create</a>
<table class="table border bprder-1 rounded-4" width='100%'>
    <tr class="text-center">
        <th>No.</th>
        <th>Language Name</th>
        <th>Publisher Name</th>
        <th>Title</th>
        <th>Number of pages</th>
        <th>Published Date</th>
        <th>Price</th>
        <th colspan="3">Action</th>
        
    </tr>
    @foreach ($books as $item)
    {{-- @dd($item) --}}
    <tr class="text-center">

        <td>{{$loop->index+1}}</td>
        {{-- @dd($item->languageData->pluck('language_name')->implode(',')); --}}
        <td>{{$item->languageData->language_name}}</td>
        <td>{{$item->publisherData->publisher_name}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->num_pages}}</td>
        <td>{{$item->published_date}}</td>
        <td>{{$item->price}}</td>
        <td><a class="btn btn-outline-info" href="{{route('todo.show',$item->book_id)}}">Show</a> </td>
        <td><a class="btn btn-outline-success" href="{{route('todo.edit',$item->book_id)}}">Edit</a></td>
        <td>
            <form action="{{ route('todo.destroy',$item->book_id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger">Remove</button>
            </form>
            </td>
    </tr>        
    @endforeach
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

