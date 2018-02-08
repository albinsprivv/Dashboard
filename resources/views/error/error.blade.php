<html>
<head>
  <title>OrionPID: Error</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<style>
body {
  background: #171717;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
}

.box {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 400px;
  margin-top: 20%;

  border: 1px solid #232323;
  border-top-left-radius: 10%;
  border-bottom-right-radius: 10%;
  padding: 10px;
}

.box > h3, p {
  text-align: center;
}

.flat-red {
  color: #c0392b;
}

a {
  text-decoration: none;
  color: #3498db;
}
</style>
<body>
  <div class="box">
  <h3>{{ $errorTitle }}</h3>
  <p> {{ $errorDescription }}. <br /><br />
    @if (isset($go_home))
    <a href="<?php echo url('/'); ?>/home/">Go home</a>
    @else
    <a href="{{ redirect()->getUrlGenerator()->previous() }}">Return to previous page</a></p>
    @endif
</div>
</body>
</html>
