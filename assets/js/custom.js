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
  
function num(val){
  document.getElementById('input_value').value += val;
}
function solve(){
  let a = document.getElementById('input_value').value;
  let b = eval(a);
  document.getElementById('input_value'). value = b;
}
function clr(){
  document.getElementById('input_value').value = "";
}