    <div class="col-md-12">
		  		 <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cadastros</h6>
                </div>
                <div class="card-body">
                  <table class="table table-bordered dataTable table-striped" id="example1" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nome</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Status</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Imagem</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tipo</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Responsável</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Alterar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($cadastro as $cadastro_item):?>
                    <tr role="row" class="odd">
                      <td><?= $cadastro_item['nomecadastro']?></td>
                      <td><?= $cadastro_item['email']?></td>
                      <td>
                        <?php if($cadastro_item['statuscadastro'] == 1): ?>
                          <span class="text-succes">SIM</span>
                        <?php else: ?>
                          <span class="text-danger">NÃO</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if($cadastro_item['img']): ?>
                          <img src="/img/cadastro/<?= $cadastro_item['img']?>" alt="" style="width: 100px">
                        <?php else: ?>
                          <img src="/img/semfoto.jpg" alt="" style="width: 100px">
                        <?php endif; ?>
                      </td>
                      <?php foreach($tipo as $tipo_item):?>
                      <?php if($tipo_item['idtipo'] == $cadastro_item['tipo']): ?>
                      <td><?= $tipo_item['nometipo']?></td>
                      <?php endif; ?> 
                      <?php endforeach; ?>
                      <?php foreach($responsavel as $responsavel_item):?>
                      <?php if($responsavel_item['idresponsavel'] == $cadastro_item['responsavel']): ?>
                      <td><?= $responsavel_item['nomeresponsavel']?></td>
                      <?php endif; ?> 
                      <?php endforeach; ?>
                      <td><a href="#" data-toggle="modal" data-target="#Modal<?= $cadastro_item['idcadastro']?>"><i class="fas fa-edit"></i>Editar</a></td>
                      <!--<td><a href="<?= '/admin/cadastro/editar/' .$cadastro_item['idcadastro'] ?>" class="fas fa-edit">Editar</a></td>-->
                      <td><a href="/admin/cadastro/excluir/<?= $cadastro_item['idcadastro']?>" onclick="return confirm('Deseja mesmo excluir o responsável <?= $cadastro_item['nomecadastro']?> ?');"><i class="fas fa-trash"></i> Excluir</a></td>
                  </tr>
    <!-- Alterar Senha Modal-->
            <div class="modal" id="Modal<?= $cadastro_item['idcadastro']?>" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Cadastro</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="<?= base_url('admin/cadastro/editar')?>" method="post">
                    <div class="form-group">
                        <label for="nomecadastro">Novo nome</label>
                        <input class="form-control" type="input" name="nomecadastro"value="<?= $cadastro_item['nomecadastro']?>"/>
                        <label for="email">Novo Email</label>
                        <input class="form-control" type="input" name="email"value="<?= $cadastro_item['email']?>"/>
                        <label for="email">Novo Status</label>
                        <br>
                        <input type="radio" name="statuscadastro" value="1" <?php if($cadastro_item['statuscadastro'] == 1){ echo 'checked';} ?>/> Sim
                        <input type="radio" name="statuscadastro" value="0" <?php if($cadastro_item['statuscadastro'] == 0){ echo 'checked';} ?>/> Não
                        <br>
                        </label>
                        <label for="tipo">Tipo</label>
                              <select name="tipo" class="form-control" tabindex="-1">
                                <option value="">Escolha o Tipo</option>
                                <?php foreach($tipo as $tipo_item):?>
                                 <option value="<?= $tipo_item['idtipo']?>" <?php if($tipo_item['idtipo'] == $cadastro_item['tipo']){ echo 'selected';}?>> <?= $tipo_item['nometipo']?></option>
                                <?php endforeach; ?>
                              </select>
                        <label for="responsavel">Responsavel</label>
                          <select name="responsavel" class="form-control" tabindex="-1" >
                          <option ><?= $responsavel_item['nomeresponsavel']?></option>
                          <?php foreach($responsavel as $responsavel_item):?>
                            <option value="<?= $responsavel_item['idresponsavel']?>" <?php if($responsavel_item['idresponsavel'] == $cadastro_item['responsavel']){ echo 'selected';}?>> <?= $responsavel_item['nomeresponsavel']?></option>
                          <?php endforeach; ?>
                        </select>
                      <br>
                        <input type="hidden" name="idcadastro" value="<?= $cadastro_item['idcadastro']?>">
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
                </div>
          </div>
		  	</div>
		  </div>
        </div>
        <!-- /.container-fluid -->