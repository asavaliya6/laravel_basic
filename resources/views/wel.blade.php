<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Switcher</title>
</head>
<body>

    <h1>Choose Your Language</h1>
    <a href="{{ url('/setlang/gu') }}">Gujarati</a>
    <br>
    <a href="{{ url('/setlang/hi') }}">Hindi</a>
    <br>

    <h2>{{ __('messages.heading1') }}</h2>
    <h4>{{ __('messages.subheading') }}</h4>

    <a href="{{ url('/about3') }}">{{ __('messages.about3') }}</a>
    <br>

    <h1>{{ __('messages.aboutName', ["name" => "Aditi"]) }}</h1>

</body>
</html>
