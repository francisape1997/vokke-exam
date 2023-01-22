<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vokke Exam</title>

        <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.2.5/css/dx.common.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.2.5/css/dx.light.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn3.devexpress.com/jslib/20.2.5/js/dx.all.js"></script>

        @vite([
            'resources/js/app.js',
            'resources/js/list.js',
            'resources/css/app.css',
        ])

    </head>

    <body>
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
            onClick="createNew()"
        >
            Create New +
        </button>
        
        <div id="list"></div>
    </body>
    
</html>
