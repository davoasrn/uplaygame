window.onload=function() {

	$( "#tab1_button1" ).click(function(){
		$( "#tab1_content1" ).show();
		$( "#tab1_content2" ).hide();
		$( "#tab1_content3" ).hide();
		$( "#tab1_button1" ).addClass( "tab1_active" );
		$( "#tab1_button2" ).removeClass( "tab1_active" );
		$( "#tab1_button3" ).removeClass( "tab1_active" );
	 });	

	$( "#tab1_button2" ).click(function(){
		$( "#tab1_content1" ).hide();
		$( "#tab1_content2" ).show();
		$( "#tab1_content3" ).hide();
		$( "#tab1_button2" ).addClass( "tab1_active" );
		$( "#tab1_button1" ).removeClass( "tab1_active" );
		$( "#tab1_button3" ).removeClass( "tab1_active" );		
	 });

	$( "#tab1_button3" ).click(function(){
		$( "#tab1_content1" ).hide();
		$( "#tab1_content2" ).hide();
		$( "#tab1_content3" ).show();
		$( "#tab1_button3" ).addClass( "tab1_active" );
		$( "#tab1_button1" ).removeClass( "tab1_active" );
		$( "#tab1_button2" ).removeClass( "tab1_active" );		
	 });

}