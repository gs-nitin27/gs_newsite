function addOrg_validate()
{   var i = 0;
	if($('#org_name').val()=='')
	{
     $('#jorg_name').html('<p>Company name required.</p>');
     i++;
	}else
	{
	 $('#jorg_name').html('');
	}
	if($('#about').val()=='')
	{
     $('#jabout').html('<p>about company required.</p>');
     i++;
	}else
	{
	 $('#jabout').html('');
	}if($('#address1').val()=='')
	{
     $('#jaddress1').html('<p>Company address required.</p>');
     i++;
	}else
	{
	 $('#jaddress1').html('');
	}if($('#city').val()=='')
	{
     $('#jcity').html('<p>city name required.</p>');
     i++;
	}else
	{
	 $('#jcity').html('');
	}if($('#pin').val()=='')
	{
     $('#jpin').html('<p>Company pin required.</p>');
     i++;
	}else
	{
	 $('#jpin').html('');
	}
	if($('#mobile').val()=='')
	{
     $('#jmobile').html('<p>Company mobile required.</p>');
     i++;
	}else
	{
	 $('#jmobile').html('');
	}if($('#email').val()=='')
	{
     $('#jemail').html('<p>Company email required.</p>');
     i++;
	}else
	{
	 $('#jemail').html('');
	}      
     if(i == 0)
     {
     	return true;
     }else
     {
     	return false;
     }       

          
}