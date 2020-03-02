<script>
   var resizefunc = [];
</script>


<!-- jQuery  -->
<script src="<?= base_url('assets/flacto/assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/detect.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/fastclick.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/jquery.slimscroll.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/jquery.blockUI.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/waves.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/jquery.nicescroll.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/jquery.scrollTo.min.js') ?>"></script>


<!-- Datatables-->
<!-- Required datatable js-->
<script src="<?= base_url('assets/flacto/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Buttons examples -->
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/buttons.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('assets/flacto/plugins/datatables/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.fixedHeader.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.keyTable.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.scroller.min.js') ?>"></script>

<!-- Responsive examples -->
<script src="<?= base_url('assets/flacto/plugins/datatables/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/flacto/plugins/datatables/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?= base_url('assets/flacto/assets/pages/jquery.datatables.init.js') ?>"></script>


<!-- App js -->
<script src="<?= base_url('assets/flacto/assets/js/jquery.core.js') ?>"></script>
<script src="<?= base_url('assets/flacto/assets/js/jquery.app.js') ?>"></script>

<script>
   $(document).ready(function() {
      $('#datatable').dataTable();
      $('#datatable-keytable').DataTable({
         keys: true
      });
      $('#datatable-responsive').DataTable();
      $('#datatable-scroller').DataTable({
         ajax: "<?= base_url('assets/flacto/plugins/datatables/json/scroller-demo.json') ?>",
         deferRender: true,
         scrollY: 380,
         scrollCollapse: true,
         scroller: true
      });
      var table = $('#datatable-fixed-header').DataTable({
         fixedHeader: true
      });
   });
   TableManageButtons.init();
</script>