<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">

<div class="text-center">
        <h1>Crud</h1>
        <br>
        <a href="{{ route('create') }}">
          <button class="btn btn-md btn-success"> Create</button>
        </a>


      </div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>contact</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($sts as $ss )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $ss->name }}</td>
                <td>{{ $ss->email }} </td>
                <td>{{ $ss->contact }} </td>
                <td>
                <div class="btn-group">
                <a href="{{ route('edit', $ss->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      </a>
                    <form action="{{ route('delete', $ss->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
      </div>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
