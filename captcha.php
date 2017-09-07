<html>
<head>
<title> Captcha </title>
<head>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700');
  #randomfield { 
    -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; 
      width: 200px;
      color: black;
      border-color: transparent;
      text-align: center;
      font-size: 40px;
      background-image: url('http://teleglobos.com.mx/imagenes/mayor/background.png');
      font-family: 'Cabin Sketch', cursive;
  }
</style>
</head>
<body onLoad="ChangeCaptcha()">

<input type="text" id="randomfield" disabled>

<script>
  // Do not remove this (it's just a comment and won't effect the functions)
  // SimpleCaptcha v1.0 © Anudeep Tubati
  function ChangeCaptcha() {
      var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
      var string_length = 6;
      var ChangeCaptcha = '';

      for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        ChangeCaptcha += chars.substring(rnum,rnum+1);
      }
      document.getElementById('randomfield').value = ChangeCaptcha;
  }
  function check() {
      if(document.getElementById('txtCodigo').value == '' || document.getElementById('CaptchaEnter').value == ''){
        alert('Rellena los campos');
      }else 
      if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
       //window.open('consulta.php ','_self');
       window.location.href="consulta.php";
      }
      else {
        alert('Ingrese el Captcha Nuevamente');
      }
  }
</script>
<br>
  <input type="text" id='txtCodigo' placeholder="Ingrese Código Colegiatura" required="">
  <input type="text" id="CaptchaEnter" size="20" maxlength="6" placeholder="Ingrese CAPTCHA" required="">
  <button onclick="check()">Enviar</button>
  <button onclick="ChangeCaptcha()">Cambiar CAPTCHA</button>
</body>
</html>