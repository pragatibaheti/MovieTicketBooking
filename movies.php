<html>
<title>Trailers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
  background-image: url('images/bgtckt.jpg');
  background-position: center;
}
button
{
  background-color: #ff8566;
  border-color: #ff8566;
  border:0px;
}
.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}
.larger
{
  width:1600px;
  background-color: red;

}
  
.outer
{
  margin: 10px;
  padding: 10px;
  width:440px;
  background-color:#366F64;
  float: left;
  
}
.inner
{
  padding:10px;
  width:420px;
  
  background-color:#ff8566;
 
}
video
{
  margin-top: -28px;
  width:400px;
  height: 300px;
}

</style>
<body>

<div class='larger'>

      <div class="outer">
        <div class="inner">
              
              <div class='vc'>  
                 <video controls>
                  <source src="suidhaga.mp4" type="video/mp4">
                 </video> 
              </div>
              <p><h2><a href="seat.php">Sui Dhaga</a></h2></p>
              <p ><b>Release Date:</b>28th september</p>
              <p>Genre:Drama</p>
               <button class='click'>
                    <i class="fa fa-thumbs-up" onclick="myFunction(this)"> </i>
                    <span class='para'>40</span></button>
                    <button class='click'>
                    <i class="fa fa-thumbs-down" onclick="myFunction(this)"> </i>
                    <span class='para'>5</span></button>
            </div>
          </div>

          <div class="outer">
            <div class="inner">
                    <div class='vc'>  
                       <video controls>
                        <source src="badhaiho.mp4" type="video/mp4">
                       </video> 
                    </div>
                    <p><h2>Badhai Ho</h2></p>
                    <p >Release Date:19th October</p>
                    <p>Genre:Drama,Comedy</p>
                    <button class='click'>
                    <i class="fa fa-thumbs-up" onclick="myFunction(this)"> </i>
                    <span class='para'>28</span></button>
                    <button class='click'>
                    <i class="fa fa-thumbs-down" onclick="myFunction(this)"> </i>
                    <span class='para'>7</span></button>
              </div>
          </div>
           <div class="outer">
            <div class="inner">
                    <div class='vc'>  
                       <video controls>
                        <source src="smallfoot.mp4" type="video/mp4">
                       </video> 
                    </div>
                    <p><h2>SmallFoot</h2></p>
                    <p >Release Date:28th september</p>
                    <p>Genre:Adventure,Kids</p>
                    <button class='click'>
                    <i class="fa fa-thumbs-up" onclick="myFunction(this)"> </i>
                    <span class='para'>31</span></button>
                    <button class='click'>
                    <i class="fa fa-thumbs-down" onclick="myFunction(this)"> </i>
                    <span class='para'>4</span></button>
              </div>
          </div>
</div>

<script>

 $('.click').click(function()
  {
      
       
       
       $(this).find('i.fa').css({"color":"red"});
       $(this).find('i.fa').css({"color":"blue"});
       var likesElem = $(this).find('.para');
       likesElem.text(parseInt(likesElem.text()) + 1);
  });
 
</script>

</body>

</html> 
