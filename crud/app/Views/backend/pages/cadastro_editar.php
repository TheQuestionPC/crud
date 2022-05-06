<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Editar Cadastro</h1>
          <?php if($msg): ?>
          	<div class="p-3 my-3 alert-info">
          		<?= $msg ?>
          <?php endif; ?>
          <div class="p-3 my-3 text-danger">
			<?= \Config\Services::validation()->listErrors(); ?>
		  </div>
		  <div class="row">
		  	<div class="col-md-12">
		  		<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Editar Cadastro</h6>
                </div>
                <div class="card-body">
				<form action="<?= base_url('admin/cadastro/gravar') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
						          <label for="nomecadastro">Nome</label>
				    	       <input class="form-control" type="input" name="nomecadastro" value="<?= $cadastro['nomecadastro']?>" />
					       </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input class="form-control" type="input" name="email" value="<?= $cadastro['email']?>"/>
                  </div>
                    <div class="form-group">
                      <label for="tipo">Tipo</label>
                          <select name="tipo" class="form-control" tabindex="-1">
                            <option value="">Escolha o Tipo</option>
                                <?php foreach($tipo as $tipo_item):?>
                             <option value="<?= $tipo_item['idtipo']?>" <?php if($tipo_item['idtipo'] == $cadastro_item['tipo']){ echo 'selected';}?>> <?= $tipo_item['nometipo']?></option>
                                <?php endforeach; ?>
                      </div> 
                  </div>
                    <div class="form-group">
                      <label for="responsavel">Responsavel</label>
                          <select name="responsavel" class="form-control" tabindex="-1" >
                          <option ><?= $responsavel_item['nomeresponsavel']?></option>
                          <?php foreach($responsavel as $responsavel_item):?>
                            <option value="<?= $responsavel_item['idresponsavel']?>" <?php if($responsavel_item['idresponsavel'] == $cadastro_item['responsavel']){ echo 'selected';}?>> <?= $responsavel_item['nomeresponsavel']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> 
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <label for="statuscadastro"> Status Cadastro
                        <br>
						            <input type="radio" name="statuscadastro" value="1" <?php if($cadastro['statuscadastro'] == 1){ echo 'checked';} ?>/> Sim
                        <input type="radio" name="statuscadastro" value="0" <?php if($cadastro['statuscadastro'] == 0){ echo 'checked';} ?>/> Não
                      </label>
                    </div>
                  </div>  
                  <div class="form-group">
                      <label for="img">Imagem</label>
                      <input type="file" name="img"/>
                  </div>
				          <input type="hidden" name="idcadastro" value="<?= $cadastro['idcadastro']?>">
                      </div>
                              <?= csrf_field(); ?>
                  </div>
                 	<input type="submit" name="submit" class="btn btn-primary" value="Editar" />
	   	</form>
                </div>
          </div>
		  	</div>

