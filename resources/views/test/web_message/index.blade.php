<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/common.js')}}"></script>
    <link href="{{asset('/css/app.css')}}"  rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('web_message.create')}}" class="btn btn-primary pl-5 pr-5">새로만들기</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>message</th>
            <th>date</th>
        </tr>
        @foreach($web_messages as $web_message)
        <tr>
            <td>
            <a class="d-block" href="{{ route('web_message.show', $web_message->id) }}" >{{$web_message->id}} </a>
            </td>
            <td>{!! nl2br(htmlspecialchars($web_message->message)) !!}</td>
            <td>{{$web_message->start_day}}~{{ $web_message->end_day }}</td>
        </tr>
        @endforeach
    </table>
</body>
<script>
    window.requestUrl = '{{ request()->url() }}';
    window.currentRouteName = '{{ Route::current()->action['as'] }}';
</script>
</html>