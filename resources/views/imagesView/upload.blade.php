<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Upload</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        .mid{
            width: 60%;
        }
    </style>
</head>
<body>
    <h1 class="well well-lg" style="margin-top: 0">Upload Image</h1>
    <div class="container">
        @if(isset($success))
            <div class="alert alert-success">{{ $success }}</div>
        @endif

        {{ Form::open(['action' => 'ImagesController@store', 'files' => true]) }}

            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control mid']) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description:') }}
                {{ Form::textarea('description', null, ['class' => 'form-control mid']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Choose an image:') }}
                {{ Form::file('image') }}
            </div>

            <div class="form-group">
                {{ Form::submit('Save', ['class' => 'btn btn-danger form-control mid']) }}
            </div>
        <div class="alert-warning">
            @foreach($errors->all() as $error)
                <br/> {{ $error }}
            @endforeach
        </div>
    </div>
</body>
</html>