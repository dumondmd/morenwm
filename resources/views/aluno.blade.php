<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário de Cadastro</title>        
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            <aluno-component></aluno-component>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script> 
        <script src="{{asset('js/popper.js')}}" type="text/javascript"></script>             
    </body>
</html>