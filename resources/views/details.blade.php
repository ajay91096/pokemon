<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Details</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
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
    <div class="flex-center position-ref full-height">
      <div class="content">
        <img src="{{ $result->sprites->front_default }}" alt="{{ $result->forms[0]->name }}">
        <div class="details">
          <div>Name: <span>{{ $result->forms[0]->name }}</span></div>
          <div>Height: <span>{{ $result->height }}</span></div>
          <div>Weight: <span>{{ $result->weight }}</span></div>
          <div>Type: <span>{{ $result->types[0]->type->name }}</span></div>
        </div>

      </div>
    </div>
  </body>
</html>
