 <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cadastrar</h1>
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
                  <h6 class="m-0 font-weight-bold text-primary">Inserir Cadastro</h6>
                </div>
                <div class="card-body">
				<form action="<?= base_url('admin/cadastro/gravar') ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
						          <label for="nomecadastro">Nome</label>
				    	       <input class="form-control" type="input" name="nomecadastro"/>
					       </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input class="form-control" type="input" name="email"/>
                  </div>
                    <div class="form-group">
                      <label for="tipo">Tipo</label>
                      <div class="form-group">
                        <select name="tipo" class="form-control" tabindex="-1">
                          <option value="">Escolha o Tipo</option>
                          <?php foreach($tipo as $tipo_item):?>
                            <option value="<?= $tipo_item['idtipo']?>"><?= $tipo_item['nometipo']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> 
                  </div>
                    <div class="form-group">
                      <label for="responsavel">Responsavel</label>
                      <div class="form-group">
                        <select name="responsavel" class="form-control" tabindex="-1">
                          <option value="">Escolha o Responsavel</option>
                          <?php foreach($responsavel as $responsavel_item):?>
                            <option value="<?= $responsavel_item['idresponsavel']?>"><?= $responsavel_item['nomeresponsavel']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> 
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <label for="statuscadastro"> Status Cadastro
                        <br>
                        <input type="radio" name="statuscadastro" value="1"/> Sim
                        <input type="radio" name="statuscadastro" value="0"/> Não
                      </label>
                    </div>
                  </div>  
                  <div class="form-group">
                      <label for="img">Imagem</label>
                      <input type="file" name="img"/>
                  </div>
				          <input type="hidden" value="" name="idcadastro">
                    <?= csrf_field(); ?>
                 	<input type="submit" name="submit" class="btn btn-primary" value="Inserir" />
		              </form>
                </div>
          </div>
		  	</div>
		  	