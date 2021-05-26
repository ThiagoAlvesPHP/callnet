<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><span class="glyphicon glyphicon-map-marker"></span> <?=$config['endereco']; ?></p>
      <p><span class="glyphicon glyphicon-phone"></span> <?=$config['phone1']; ?></p>
      <p><span class="glyphicon glyphicon-phone"></span> <?=$config['phone2']; ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?=$config['email']; ?></p>
    </div>
    <div class="col-sm-7 slideanim">
      <form method="GET" action="send.php" target="_blank">
        <input class="form-control" id="comments" name="comentario" placeholder="Digite sua Mensagem" rows="5"><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Mensagem por Whatsapp</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.555851294578!2d-39.48777058580276!3d-13.745318890351648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x73f19fd4c277623%3A0xe6fc50f2f230e628!2sCallnet!5e0!3m2!1spt-BR!2sbr!4v1544630506901" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>