<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/common.js')}}"></script>
    <link href="{{asset('/css/app.css')}}"  rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('web_message.edit', $web_message->id) }}" class="btn btn-primary">편집</a>
    <table class="table">
        <tr>
            <td class="col-2">id</td>
            <td>{{ $web_message->id }}</td>
        </tr>
        <tr>
            <td>message</td>
            <td>{{ $web_message->message }}</td>
        </tr>
        <tr>
            <td>date</td>
            <td>{{ $web_message->start_day }} ~ {{ $web_message->end_day }}</td>
        </tr>
        {{$web_message->date}}
    </table>
    <button type="button" class="btn btn-primary" id="back_button">뒤로가기</button>
</body>
<script>
    window.requestUrl = '{{ request()->url() }}';
    window.currentRouteName = '{{ Route::current()->action['as'] }}';
    window.previousRoute ='{{ route('web_message.index') }}';
</script>
</html>