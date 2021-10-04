// $(document).ready(function() {
//     $('#example').DataTable();
// } );
$('#example').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    "paging": false
  });
  $(window).on('resize', function() {
    resizetable();
  });
  function resizetable() {
    $('.dataTables_scrollBody').css({
      maxHeight: ($(window).height() - 78 - 65) + 'px'
    });
  }
  resizetable();