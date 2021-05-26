<!-- Container (Pricing Section) -->
<div id="dicas" class="container-fluid">
  <div class="text-center">
    <h2>Dicas</h2>
  </div>
  <div class="row slideanim">
  <?php foreach ($dicas as $key => $value): ?>
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?=$value['dica']; ?></h1>
        </div>
        <div class="panel-body">
          <p>
            <?=$value['text']; ?>
          </p>
        </div>
      </div>      
    </div> 
  <?php endforeach; ?> 
  </div>
</div>