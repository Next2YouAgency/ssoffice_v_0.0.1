<script>
  $(function() {
    $( "#tabsAlertas" ).tabs();
  });
  </script>
<div id="tabsAlertas">
  <ul>
    <li><a href="#tabs-1">Compromissos</a></li>
    <li><a href="#tabs-2">Publicações</a></li>
    <li><a href="#tabs-3">Processos</a></li>
  </ul>
  <div id="tabs-1">
    <?php include_once 'parts/compromissos.php'?>
  </div>
  <div id="tabs-2">
    <?php include_once 'parts/publicações.php'?>
  </div>
  <div id="tabs-3">
    <?php include_once 'parts/processos.php'?>
  </div>
</div>