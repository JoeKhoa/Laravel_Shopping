<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost:8000/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="source/css/bootstrap.css">
    {{-- <link rel="stylesheet" href="source/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css"> --}}

    <title>Document</title>
</head>
<body>
    <button class="btn btn-primary">test</button>
    <div class="alert alert-primary" role="alert"> alert </div>
    {{-- {!! Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')) !!} --}}
    {{$data[0]}}
    <?php print_r($data);?>
    {{$categoriesAppServiceProvider}}
</body>
</html>

