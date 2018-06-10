function create_hash()
{ 
	$.ajax({
        url:route_url+'/manage/create_hash',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        method:"POST",
        data:JSON.stringify(data),
        type:"text",
        processData: false,
        //async:false,
        success:function(result){
         // var result = JSON.parse(result);
          var txnid = result.txnid
          var hash = result.hash;
          var hash_string = result.hash_string;
          $('#hash').val(hash);
          $('#txnid').val(txnid);
          $('#hash_string').val(hash_string);
          return_value = '1'; 
          var payuForm = document.forms.payuForm;
          payuForm.submit(); 
          
        }
	});
}
// $(document).ready(function(){
//  });
