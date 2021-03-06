<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"></link>

        <title>{{config('app.name', 'LSAPP')}}</title>

        
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @include('inc.messages')  
        @yield('content')
      </div>

      <script type="text/javascript" src="{{ URL::asset('assets/js/ckeditor/ckeditor.js') }}"></script`> 
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>
