<script>
  $(function() {
    $( "#tabsAlertas" ).tabs();
  });
  </script>
<div id="tabsAlertas">
  <ul>
    <li><a href="#tabs-1">Principal</a></li>
    <li><a href="#tabs-2">Personaliza&ccedil;&atilde;o</a></li>
    <li><a href="#tabs-3">Usu&aacute;rios</a></li>
    <li><a href="#tabs-4">Pagamentos</a></li>
    <li><a href="#tabs-5">Extratos</a></li>
  </ul>
  <div id="tabs-1">
    <?php include_once 'parts/default.php'?>
  </div>
  <div id="tabs-2">
    <?php include_once 'parts/personalize.php'?>
  </div>
  <div id="tabs-3">
    <?php include_once 'parts/users.php'?>
  </div>
  <div id="tabs-4">
    <?php include_once 'parts/payments.php'?>
  </div>
  <div id="tabs-5">
    <?php include_once 'parts/extracts.php'?>
  </div>
</div>