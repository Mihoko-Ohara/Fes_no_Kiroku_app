<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フェスのきろく</title>
	<link rel="stylesheet" href="css/fes.css">
	<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <fes-component></fes-component>
        <footer-component></footer-component>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>