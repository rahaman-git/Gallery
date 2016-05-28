<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Images</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

<h1 class="well well-lg">All Image List</h1>
@foreach( $images as $image )
    <div class="table table-bordered bg-success"><a href="{!! '/images/'.$image->filePath !!}">{{$image->filePath}}</a></div>
@endforeach

</body>
</html>