<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Movies</title>
</head>
<style>
    body {
        background-color: black;
    }

    .place {
        margin-left: 120px !important;
    }
</style>

<body>
    <img src="https://www.edigitalagency.com.au/wp-content/uploads/Netflix-logo-red-black-png.png" height="200px"
        width="400px" alt="logo" style="margin-left: 550px;">
    {{-- <img src="{{asset('../../../public/storage/360_F_360066662_HP5c8JZZ2LnTkwrYR7You9P2kmE1dz4k.jpg') }}" alt="logo">  --}}

    {{-- <img src="{{ asset(.'/images/'.$article->image) }}" alt="" title=""> --}}

    <br>
    <a href="{{ route('movies.create') }}" class=" place btn btn-danger mt-5 ">+Add Movie </a>

    @foreach ($Films as $movie)
        @csrf
        <div class="container text-center">
            <div class="row">
                <div class="my-5 col-xs-3">
                    <div class="row row-cols-3 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $movie->movie_name }}</h4>
                                    <h5 class="card-title">{{ $movie->movie_description }}</h5>
                                    <p class="card-text">{{ $movie->movie_gener }}</p>
                                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-danger">Edit</a>
                                </div>
                                <form action="{{route('movies.destroy', $movie->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</body>

</html>
