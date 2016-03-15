<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
{{Form::open(array('url'=>'/college.upload','class'=>'form-horizontal','novalidate'=>'novalidate','files'=>true))}}

{{ Form::label('image', 'Upload Image')}}
{{ Form::file('excelfile') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}
</body>
</html>