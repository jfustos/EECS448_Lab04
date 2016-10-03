function fix_pos_numeric( name, propName )
{
	var field = document.getElementById( name );
	var num = parseInt( field.value );
	if( isNaN( num ) || num < 0)
	{
		alert( "Number of " + propName + " must be numeric and positive!!!" );
		return true;
	}
	num = "" + num;
	if( field.value != num )
	{
		alert( "Can only order whole numbers of items." );
		return true;
	}
	return false;
}

function check_submit()
{
	var orderForm = document.getElementById("orderForm");
	
	var userName = document.getElementById("userName").value;
	if( userName.search( '^[a-z0-9]+@[a-z0-9]+[.]com$' ) == -1 )
	{
		alert( "User name must be in the form name@domain.com!!!" );
		return;
	}
	
	var password = document.getElementById("password").value;
	if( password.length == 0 )
	{
		alert( "Cannot submit with a blank password!!!" );
		return;
	}
	
	if( fix_pos_numeric( "numFoot",   "Footballs" )   ){ return; }
	if( fix_pos_numeric( "numBasket", "Basketballs" ) ){ return; }
	if( fix_pos_numeric( "numSoccer", "Soccerballs" ) ){ return; }
	
	orderForm.submit();	
}

function form_reset()
{
	document.getElementById("userName").value  = "";
	document.getElementById("password").value  = "";
	document.getElementById("numFoot").value   = "";
	document.getElementById("numBasket").value = "";
	document.getElementById("numSoccer").value = "";
	document.getElementById("shipO").checked = false;
	document.getElementById("shipT").checked = false;
	document.getElementById("shipF").checked = true;
}
