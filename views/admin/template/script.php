

<!-- jQuery -->

<script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="<?=base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->

<script src="<?=base_url()?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/jszip/jszip.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>

<script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->

<script src="<?=base_url()?>assets/admin/dist/js/adminlte.min.js"></script>

<!-- InputMask -->

<!-- <script src="../../plugins/moment/moment.min.js"></script> -->

<script src="<?=base_url()?>assets/admin/plugins/inputmask/jquery.inputmask.min.js"></script>

<!-- Ekko Lightbox -->

<script src="<?=base_url()?>assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>



<!-- dashboard -->



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

    

  $("#example4").DataTable({

      "responsive": true, "lengthChange": false, "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

  $("#example3").DataTable({

      "responsive": true, "lengthChange": false, "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

  });



  

</script>









<script>

    $(".dismissable").fadeTo(5000, 500).slideUp(500, function(){

    $(".dismissable").slideUp(500);

});

</script>