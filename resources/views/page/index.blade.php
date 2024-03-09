<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <div class="container py-3">
            <a href="/page/create"></a> <br>
            <div class="card">
                <ul class="card">
                    @foreach ($remide as $chant)
                    
                    
                   
                    <form action="/page/{{$chant->id}}" method="post">
                    @csrf
                    @method('delete')
                    <table>
                        <td>  {{ $chant->id     }}</td>
                        <td> 
                            {{$chant->name}}</td>
                            <td>{{$chant->email}}</td>
                 
                    
                   
           
                  <td> <button type="submit">Delete</button></td>
                    <td><a href="/page/create"class='btn btn-success' > Create</a></td>
                    <td><a href="/page/{{$chant->id}}/edit" class="btn btn-secondary">edit</a></td>
                    </form>
                </table>
                  
                       
                   
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>


