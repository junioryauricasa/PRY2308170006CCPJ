<!DOCTYPE html>
<html>
  <title>HTML Tutorial</title>

  <head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

<body>

  <form action="#" method="POST" onsubmit="miFuncion()">
    <input type="text" name="txtCodigo" id="txtCodigo" placeholder="Nombre...">
    <div class="g-recaptcha" data-sitekey="6Le9zh8UAAAAAKn-kpHg2Ls7MfqsiOznS7Pp94ja"></div>
    <input type="submit" name="enviar" placeholder="ENVIAR">
  </form>

<script>
  function miFuncion() {
    var response = grecaptcha.getResponse();

    if(response.length == 0){
      alert("Captcha no verificado")
    } else {
      alert("Captcha verificado");
     
    }
    }
  }
</script>

</body>

</html>