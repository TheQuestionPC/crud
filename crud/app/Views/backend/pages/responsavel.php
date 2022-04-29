 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Responsável</h1>

          <?php if($msg): ?>
          	<div class="p-3 my-3 alert-info">
          		<?= $msg ?>
          <?php endif; ?>

          <div class="p-3 my-3 text-danger">
			<?= \Config\Services::validation()->listErrors(); ?>
		  </div>

		  <div class="row">
		  	<div class="col-md-6">
		  		<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Inserir Responsável</h6>
                </div>
                <div class="card-body">
				<form action="<?= base_url('admin/responsavel/gravar') ?>" method="post">

                  <div class="form-group">
						          <label for="nomeresponsavel">Responsável</label>
				    	       <input class="form-control" type="input" name="nomeresponsavel"/>
					       </div>

                  <div class="form-group">
                      <label for="origemresponsavel">Origem</label>
                      <input class="form-control" type="input" name="origemresponsavel"/>
                  </div>

				    <input type="hidden" value="" name="idresponsavel">
                    <?= csrf_field(); ?>
                 	<input type="submit" name="submit" class="btn btn-primary" value="Inserir" />
		</form>
                </div>
          </div>
		  	</div>
		  	<div class="col-md-6">
		  		 <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Responsáveis Cadastrados</h6>
                </div>
                <div class="card-body">
                  <table class="table table-bordered dataTable table-striped" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Responsáveis</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Origem</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Alterar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>

                  	<?php foreach($responsavel as $responsavel_item):?>
                  <tr role="row" class="odd">
                      <td class="sorting_1"><?= $responsavel_item['nomeresponsavel']?></td>
                      <td class="sorting_2"><?= $responsavel_item['origemresponsavel']?></td>
                      <td><a href="#" data-toggle="modal" data-target="#Modal<?= $responsavel_item['idresponsavel']?>"><i class="fas fa-edit"></i>Editar</a></td>
                      <td><a href="/admin/responsavel/excluir/<?= $responsavel_item['idresponsavel']?>" onclick="return confirm('Deseja mesmo excluir o responsável <?= $responsavel_item['nomeresponsavel']?> ?');"><i class="fas fa-trash"></i> Excluir</a></td>
                   </tr>


    <!-- Alterar Senha Modal-->
            <div class="modal" id="Modal<?= $responsavel_item['idresponsavel']?>" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Responsável</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="<?= base_url('admin/responsavel/editar')?>" method="post">


                    <div class="form-group">
                        <label for="nomeresponsavel">Novo nome</label>
                        <input class="form-control" type="input" name="nomeresponsavel"value="<?= $responsavel_item['nomeresponsavel']?>"/>
                        <label for="origemresponsavel">Nova origem</label>
                        <input class="form-control" type="input" name="origemresponsavel"value="<?= $responsavel_item['origemresponsavel']?>"/>
                        <input type="hidden" name="idresponsavel" value="<?= $responsavel_item['idresponsavel']?>">
                      </div>
                              <?= csrf_field(); ?>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Alterar" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
						<?php endforeach; ?>
                </tbody>
                </table>
                <?= $pager->links(); ?>
                </div>
          </div>
		  	</div>

		  </div>

        </div>
        <!-- /.container-fluid -->