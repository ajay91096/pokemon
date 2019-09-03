<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">
            .content {
                display: inline-block;
                border: 1px solid #000;
            }
            .content a {
                display: flex;
                align-items: center;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        @if ($result)
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <a href="{{ url('pokemon/'.$result->forms[0]->name) }}" alt="{{ $result->forms[0]->name }}">
                        <img src="{{ $result->sprites->front_default }}" >
                        <span>{{ $result->forms[0]->name }}</span>
                    </a>
                </div>
            </div>
        @endif
    </body>
</html>
