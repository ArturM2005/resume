<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resume</title>

    </head>
    <body>
        <embed src="{{ asset('pdf/resume.pdf') }}" type="application/pdf" width="100%" height="100%">
    </body>
</html>
