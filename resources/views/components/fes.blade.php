<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue FileUpload</title>
	<!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
	<link rel="stylesheet" href="css/fes.css">
</head>
<body>
    <div id="app">
        <header-component></header-component>
        <fes-component></fes-component>
        <footer-component></footer-component>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>