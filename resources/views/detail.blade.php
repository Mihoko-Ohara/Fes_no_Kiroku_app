<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue FileUpload</title>
    <link rel="stylesheet" href="css/fes.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header-component></header-component>
        <detail-component
        :fes-id="{{ $fes->id }}"
        :fes-day="{{ json_encode($fes->day) }}"
        :fes-title="{{ json_encode($fes->title) }}"
        :fes-place="{{ json_encode($fes->place) }}"
        :fes-band="{{ json_encode($fes->band) }}"
        :fes-comment="{{ json_encode($fes->comment) }}"
        >
        </detail-component>
        <footer-component></footer-component>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>