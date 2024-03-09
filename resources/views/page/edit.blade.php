<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <div class="card">
            <form action="/page/{{$remide->id}}" method="POST">
            @csrf
            @method('put')
            <input type="text" name="name" placeholder=" enter ur name" value="{{ $remide->name}}"> <br>
            <input type="text" name=" email" placeholder=" enter ur email" value="{{ $remide->email}}">
            <button type="submit" class="btn btn-primary">create</button>
            <a href="/page" class="btn btn-primary">Back</a>

            
            
            
            
            </form>

        </div>
    </div>
</body>
</html>