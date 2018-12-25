<html>
<head>
	<title>Seat Selecion</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
	<style>
	#title
	{
		text-align: center;
		color:#BD4025;
		font-size: 50px;
		font-family: arial;
	}
	body{
		background-image: url('images/hall.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		margin: 2px;
	}
	div.transbox {
  margin: 100px;
  background-color:rgba(0,0,0,0.4);
  border: 1px solid black;
  padding: 10px;
  height:800px;
 

}
#para { 
	border:  1px ; 
	width: 400px; 
	height: 400px; 
	margin:auto;
	padding: 5px;
}

div .items
{
	text-align: center;
}
.c
{
	color:rgba(255,255,0);
	font-size: 20px;
}
input
{
	height: 30px;
	width:200px;
	background-color: transparent;
	border-color: black;
	color:#fff;
	text-transform: uppercase;
}
#butt
{
	align-self: left;
	height: 40px;
	width:150px;
	background-color: black;
	border-color:#DAF7A6;
	color:#bf55ec;
	border-radius: 200px;
	
}
#butt:hover
{
	background-color:#DAF7A6;
	border-color:black;
	color: black;
	border-radius: 200px;

}
.seat {
    
    width: 20px;
    height: 20px;
    margin: 5px;
    border: solid 1px yellow;
    float: left;
    border-radius: 8px;
    
}

.clearfix { clear: both;}
.available {
    background-color: #96c131;
}

.hovering{
	background-color: #0073e6;
	width:22px;
	height: 22px;
	
}
.selected{
    background-color: green;
}
.unavailable
{
	background-color: #ff0066;
}
#screen
{
	height:50px;
	margin-top:5px;
	background-color: orange;
	text-align: center;
	padding-top:20px;
	width:350px;
	border-radius: 15px;
}
#confirm
{
	margin-top: 10px;
	height: 40px;
	width:150px;
	background-color: black;
	border-color:#DAF7A6;
	color:#bf55ec;
	border-radius: 200px;
	margin-left: -20px;
	


}
#confirm:hover
{
	margin-top: 10px;
	height: 50px;
	width:170px;
	background-color: black;
	border-color:#DAF7A6;
	color:#bf55ec;
	border-radius: 200px;
}
#book
{
	margin-top: 240px;
}

</style>/
</head>
<body>
	
	<p id=title>SELECT YOUR SEAT</p>
	
  <div class="transbox">
  	<div class='items'>
    <p class='c'>Fill The Required Details Below And Select Your Seats</p>
    <form method="post" action="seatselection1.php">
    <input type="text" name="name" id="input_id" placeholder="Name*" required="required">
    <input type="text"name="email" placeholder="Email-Id*" required="required">
    <br>
    <br>

    <input type="submit" name="start" id="butt">
    </form>
    <div id='para'>
    	<form method="post" action="seatselection.php">
    <button id='conf' value="seatconfirm" hidden="hidden">confirm seats!</button>
</form>



  </div>
 <?php
session_start();
$conn=new mysqli("localhost","root","","movies");
$datass=array();
$result =mysqli_query($conn, "SELECT * FROM reserved") or die("Error: " . mysqli_error($conn));
						$datas=array();
				     while($row=mysqli_fetch_array($result))
				      {
				      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>"
				      		
				      		$datas[]=$row;


			          }
			          foreach($datas as $data)
			          {
			          	  $datass[]=$data[0];
			          	  
			          	  
			          	  
			          }

			          
			          mysqli_close($conn);

 ?>
<script>
	$(document).ready(function()
	{
		
    $("#butt").click(function()
    {


    	var input = document.getElementById("input_id").value;

		         $.ajax({
												url:"seatselection1.php",
												method:"post",
												
												data:"name="+input,
												success:function()
												{
												console.log("done first");
												}

											})
    	for(var y=0;y<10;y++)
    	{
    	for(var x=0;x<10;x++)
    	{
    		
        
         
        	$("#para").append(" <div class=\"seat\"></div>");
        	 if(x==9)
              {
        	$("#para").append(" <div class=\"clearfix\"></div>");

              }
        }
        $("#para").append("<br>");
        if(y==9)
        {
        	$("#para").append("<div id=\"screen\">SCREEN THIS WAY</div>");
        	$("#para").append("<button id=\"confirm\">CONFIRM SEATS</button>");
        	//$('#conf').show();
        	$('#butt').prop('disabled',true);
        }
      }
      var cls = document.getElementsByClassName("seat"); 
		        for (n=0, length = cls.length; n < length; n++)
		         {
		            cls[n].id= (n + 1); 
		            

		         }
		          var ar = <?php echo '["' . implode('", "', $datass) . '"]' ?>;
	  			 console.log(ar);
													
				for(var k=0;k<ar.length;k++)
					{
					console.log(ar[k]);
					$('#'+Number(ar[k])).addClass("unavailable");							        
					}
      
   $('#confirm').click(function()
   {


   				

		   		

		         var selected_seats="";
		         var count=0;
		         var selected=[];
		       for (n=0, length = cls.length; n < length; n++)
		         {
		            var elem=document.getElementById(cls[n].id); 
		            if($('#'+elem.id).hasClass("selected"))
		            	{
		            	
						   selected_seats+=" "+elem.id;
						   selected.push(elem.id);
		            	   count++;
		            	   $('#'+elem.id).removeClass("selected").addClass("unavailable");

		            	}
		            	
                        
		            	
		        }

		        alert("Seats Selected:"+selected_seats+"\nAmount Payable:Rs"+count*200);
		        
		         
		         $.ajax({
												url:"seatselection.php",
												method:"post",
												data:{seat:selected_seats,count:count,selected:selected},
												
												success:function()
												{
													console.log("done");
													$('#book').show();

												}

						})
	});

   

   $('.seat').on('click',function(){ 


              if($(this).hasClass( "selected" )){
                $( this ).removeClass( "selected" );                  
              }else{                   
                $( this ).addClass( "selected" );
              }

            });
    $('.seat').mouseenter(function(){     
                $( this ).addClass( "hovering" );

                   $('.seat').mouseleave(function(){ 
                   $( this ).removeClass( "hovering" );
                      
                   });
            });
});
   
    
});


</script>
<p>
	<?php 
	if(isset($_POST['start']))
	{
       echo $_SESSION['name'];
    }


?>	
</p>
<p  id="book" hidden="hidden"><a href="reviews.php">Click Here for Booking Details</a></p>
</body>
</html>