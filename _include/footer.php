      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; - Colegio de Contadores Públicos de Junín - Todos los Derechos Reservados
      </footer>


      <div class="control-sidebar-bg"></div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--script src="plugins/morris/morris.min.js"></script-->
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="dist/js/pages/dashboard.js"></script-->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>



<style>
  .vertical-align {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: row;
  }
  
  .parallax {
      /* The image used */
      background-image: url('img_parallax.jpg');

      /* Full height */
      height: 100%; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
  .embed-responsive {
      position: relative;
      display: block;
      height: 0;
      padding: 0;
      overflow: hidden;
  }
  .paralax{
        background: url(https://www.fotopaises.com/Fotos-Paises/t1024/2012/3/10/3839_1331308012.jpg) no-repeat center center fixed;
        height: 100%;
        position: relative;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
  }
  #parallax-div{
    margin-top: 50px;
    margin-bottom: 50px;
  }
</style>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "268755259885145", // Facebook page ID
            email: "ccpj@gmail.com", // Email
            sms: "+051 944 691 442", // Sms phone number
            call: "+051 944 691 442", // Call phone number
            company_logo_url: "//scontent.xx.fbcdn.net/v/t1.0-1/p50x50/20604723_1399212693506057_5885822338460552719_n.jpg?oh=5d4da5524d615904e7f32ad6f09df75d&oe=5A3904A7", // URL of company logo (png, jpg, gif)
            greeting_message: "Hola, te damos la bienvenida la Página Web del Colegio de Contadores Públicos de Junín, en que podemos ayudarte?", // Text of greeting message
            call_to_action: "Bienvenido, Como puedo ayudarte?", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "email,facebook,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

<!-- evitar click derecho -->
<!--script language="Javascript">
  document.oncontextmenu = function(){return false;}
</script-->
<!-- END evitar click derecho -->
<script language="Javascript"> 
    /*
    function disableselect(e){ 
      return false 
    } 
    function reEnable(){ 
      return true 
    } 
    
    document.onselectstart=new Function ("return false") 
    if (window.sidebar){ 
      document.onmousedown=disableselect 
      document.onclick=reEnable 
    } 
    */

    //ADD and Remove all LEFTMAIN
    $(document).ready(function(){
        $("#buttondisplayhidden").click(function(){
            $(".fixed").toggleClass("sidebar-collapse sidebar-open");
        });
    });
</script> 