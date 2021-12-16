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
    <form action="{{ route('web_message.update', $web_message->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <table>
            <tr>
                <textarea id="message" name="message" cols="200" rows="5">{{ old('message', $web_message->message) }}</textarea>
            </tr>
            <tr>
                <input type="date" id="start_day" name="start_day" value="{{ old('start_day', $web_message->start_day) }}">
            </tr>
            <tr>
                <input type="date" id="end_day" name="end_day" value="{{ old('start_day', $web_message->end_day) }}">
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">편집</button>
        <button type="button" class="btn btn-primary" id="back_button">뒤로가기</button>
    </form>
</body>
<script>
    window.requestUrl = '{{ request()->url() }}';
    window.currentRouteName = '{{ Route::current()->action['as'] }}';
    window.previousRoute ='{{ route('web_message.show', $web_message->id) }}';
</script>
</html>