@if(session()->has('flash_message'))
<script>
  
$(document).ready(function(){
//  $('[id="bn"]').click(function(){
//    swal("ثبت شد", "You clicked the button!", "success");
    swal({
    title:'text',
    type:"error",
    timer:2000,
    showConfirmButton:false,
    
    
  });
});
//});
</script>
@endif

