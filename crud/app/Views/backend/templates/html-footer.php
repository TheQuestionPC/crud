<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Caso queira sair do sistema clique em <b>Sair</b> para encerrar a sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?= base_url('login/logout')?>">Sair</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="<?= base_url('/theme/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('/theme/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/theme/dist/js/adminlte.min.js') ?>"></script>






<script src="<?= base_url('/theme/plugins//fullcalendar/fullcalendar.min.js') ?>"></script>

<script src="<?= base_url('/theme/plugins/fullcalendar/toastr.min.js') ?>"></script>

<script src="<?= base_url('/theme/plugins/fullcalendar/moment.min.js') ?>"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
  $(document).ready(function(){

    var calendario = $("#calendario").fullCalendar({


    });
  }); 
  

</script>

 

</body>

</html>
