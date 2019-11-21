<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$talent->talent_id}}
    {{$talent->user_id}}
    {{$talent->description}}
    {{$talent->price}}
    
    
    {{$faved[0]}}
    {{$faved[1]}}

          
    @if ($faved[1] =='true')
    <form class="form" method="POST" action="/remove/{{$talent->talent_id}}/1">
        @csrf
    <button type="submit" class="btn btn-info">remove fave for user 1</a>
    </form>
    @else
    <form class="form" method="POST" action="/store/{{$talent->talent_id}}/1">
        @csrf
    <button type="submit" class="btn btn-info">add fave for user 1</a>
    </form>    
    
        
    @endif
</body>
</html>