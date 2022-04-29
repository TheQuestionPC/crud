 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tipo</h1>

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
                  <h6 class="m-0 font-weight-bold text-primary">Inserir Tipo</h6>
                </div>
                <div class="card-body">
				<form action="<?= base_url('admin/tipo/gravar') ?>" method="post">

                    <div class="form-group">
						<label for="nometipo">Tipo</label>
				    	<input class="form-control" type="input" name="nometipo"/>
					</div>

				    <input type="hidden" value="" name="idtipo">
                    <?= csrf_field(); ?>
                 	<input type="submit" name="submit" class="btn btn-primary" value="Inserir" />
		</form>
                </div>
          </div>
		  	</div>
		  	<div class="col-md-6">
		  		 <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tipos Cadastrados</h6>
                </div>
                <div class="card-body">
                  <table class="table table-bordered dataTable table-striped" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tipos</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Alterar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>

                  	<?php foreach($tipo as $tipo_item):?>
                  <tr role="row" class="odd">
                      <td class="sorting_1"><?= $tipo_item['nometipo']?></td>
                      <td><a href="#" data-toggle="modal" data-target="#Modal<?= $tipo_item['idtipo']?>"><i class="fas fa-edit"></i>Editar</a></td>
                      <td><a href="/admin/tipo/excluir/<?= $tipo_item['idtipo']?>" onclick="return confirm('Deseja mesmo excluir o tipo <?= $tipo_item['nometipo']?> ?');"><i class="fas fa-trash"></i> Excluir</a></td>
                   </tr>


    <!-- Alterar Senha Modal-->
            <div class="modal" id="Modal<?= $tipo_item['idtipo']?>" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar tipo</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="<?= base_url('admin/tipo/editar')?>" method="post">


                    <div class="form-group">
                        <label for="nometipo">Novo tipo</label>
                        <input class="form-control" type="input" name="nometipo"value="<?= $tipo_item['nometipo']?>"/>
                        <input type="hidden" name="idtipo" value="<?= $tipo_item['idtipo']?>">
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