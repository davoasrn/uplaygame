<?php 
require("blocks/baza.php");

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = mysql_query("select * from cities where country_id = ".$id);
	echo '<option value="0" selected="selected">Choose City...</option>';
	while($city = mysql_fetch_array($sql)){
		echo '<option id = "'.$city['id'].'">'.$city['name'].'</option>';
	}
	exit;
}
?>

<link rel="stylesheet" href="css/login.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#country").change(function(){
			var id = $(this).val();
			var dataSend = 'id='+ id;	
			$.ajax({
				type : "POST",
				data : dataSend,
				success : function(html){
					$(".city").html(html);
				}
			});
		});
	});
</script>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<body>

  <section class="container">
    <div class="login">
      <img src="images/logo.png">
      <form method="post" action="index.php">
        <p><select id="country" name="country">
            <option value="0" selected="selected">Choose Country...</option>
            
        <?php 
			$res = mysql_query("SELECT * FROM countries");
			$coun = mysql_fetch_array($res);
			do 
			{
			$cid = $coun['id'];	
			$name = $coun['name'];
		
			echo "<option value='".$cid."'>".$name."</option>";
        
            }
            while($coun = mysql_fetch_array($res));
        ?>
			
            </select></p>         
    
         
         <p><select id="select" name="city" class="city">
            <option value="0" selected="selected">Choose City...</option>       
        <?php 
			$res1 = mysql_query("SELECT * FROM cities WHERE country_id = '$cid'");
			$city = mysql_fetch_array($res1);
			do 
			{
			$tid = $city['id'];	
			$name = $city['name'];
		
			echo "<option value='".$tid."'>".$name."</option>";

            }
            while($city = mysql_fetch_array($res1));
        ?>

        </select></p> 

        <p class="submit"><input type="submit" name="commit" value="Find"></p>
      </form>
    </div>
  </section>

</body>
</html>