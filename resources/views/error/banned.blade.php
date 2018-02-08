<html>
<head>
  <title>Account banned</title>
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
</style>
<body>
  <div class="box">
  <h3>Attention, {{ $user }}!</h3>
  <p>Your account is <b class="flat-red">banned</b>.</p>
</div>
</body>
</html>
