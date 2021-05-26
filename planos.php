<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Planos</h2>
    <h4>Conheça nossos planos residênciais</h4>
  </div>
  <div class="row slideanim">
  <?php foreach ($planos as $key => $value): ?>
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?=$value['plano']; ?></h1>
        </div>
        <div class="panel-body">
          <p><strong><?=$value['qt_mega']; ?></strong> MEGA</p>
        </div>
        <div class="panel-footer">
          <h3>R$<?=number_format($value['price'], 2, ',', '.'); ?></h3>
          <h4>Mensal</h4>
          <a href="https://api.whatsapp.com/send?phone=55<?=$number; ?>&text=Queria uma informação sobre o plano de <?=$value['qt_mega']; ?> Mega" class="btn btn-lg" target="_blank">Orçamento Agora</a>
        </div>
      </div>      
    </div> 
  <?php endforeach; ?> 
  </div>
</div>