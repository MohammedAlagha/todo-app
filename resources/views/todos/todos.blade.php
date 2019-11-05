<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <div class="row pt-5 justify-content-center">
            <div class="card" style='width:50%'>
                <div class='card-header text-center'>
                    <h1>ALL Todos</h1>
                </div>
                <div class="card-body">
                    <ul class='list-group'>
                        @foreach($todos as $todo)
                            <li class='list-group-item text-muted'>
                            {{$todo->title}}
                            <span class='float-right mr-2'>
                                <a href="#" style='color:#ff1313'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            </span>
                            <span class='float-right mr-2'>
                                <a href="#" style='color:#46ab4a'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                            </span>
                            <span class="float-right mr-2">
                            <a href="#" style='color:#1198d6'><i class="fa fa-eye" area-hidden='true'></i></a>
                            </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>