$('#table').DataTable({
  "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
  }
});

function listEmployees(){
  event.preventDefault();
  $.ajax({
    method: "get",
    url: "employee.list.php"
  })
  .done(function( data ) {
    $(".listEmployees").html(data);
  });
}

function showFormEmployee(id){
  $.ajax({
    method: "get",
    url: "employee.newedit.php?id="+id
  })
  .done(function( data ) {
    $(".modalFrmEmployee").html(data);
  });
  $(".bg, .modalFrmEmployee").show();
}

$(".showForm").click(function(event){
  event.preventDefault();
  showFormEmployee(0);
});

$(".modalFrmEmployee").on("click", ".hideForm", function(event){
  event.preventDefault();
  $(".bg, .modalFrmEmployee").hide();
});

$(document).on("submit","#frmEmployee",function(event){
  event.preventDefault();
  $.ajax({
    method: "post",
    url: "employee.save.php",
    data: $( this ).serialize()
  })
  .done(function( data ) {
    if(data.resultado){
      $(".bg, .modalFrmEmployee").hide();
      listEmployees();
    }
    alert(data.mensaje);
  });
});

$(".listEmployees").on("click", ".edit", function(event){
  event.preventDefault();
  var employee_id = $(this).attr('data-id');
  showFormEmployee(employee_id);
});

$(".listEmployees").on("click", ".delete", function(event){
  event.preventDefault();
  var delete_employee = confirm("¿Está seguro de eliminar?");
  if ( delete_employee ) {
    var employee_id = $(this).attr('data-id');
    $.ajax({
      method: "get",
      url: "employee.delete.php?id="+employee_id
    })
    .done(function( data ) {
      if(data.resultado){
        listEmployees();
      }
      alert(data.mensaje);
    });
  }
});