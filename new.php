<?php
session_start();
$back="rgb(255, 255, 255)";
$text="rgb(0, 0, 0)";
$mode="Dark mode";
$sw="moded";
if($_POST['moded']!=""){
    $back="black";
    $text="white";
    $mode="Light mode";
    $sw="model";
    $_SESSION['back']="black";
    $_SESSION['text']="white";
    $_SESSION['mode']="Light mode";
    $_SESSION['sw']="model";
}
if($_POST['model']!=""){
    $back="rgb(255, 255, 255)";
    $text="rgb(0, 0, 0)";
    $mode="Dark mode";
    $sw="moded";
    $_SESSION['back']="rgb(255, 255, 255)";
    $_SESSION['text']="rgb(0, 0, 0)";
    $_SESSION['mode']="Dark mode";
    $_SESSION['sw']="moded";

}
if(isset($_SESSION['mode'])){

$back= $_SESSION['back'];
$text=$_SESSION['text'];
$mode= $_SESSION['mode'];
$sw= $_SESSION['sw'];
}

?>

<?php
if(date('H')<13){
    $greet="Good morning";
}elseif (date('H')==13) {

    $greet="Lunch time";
}elseif (date('H')>13 && date('H')<=16) {
    $greet="Good afternoon";
}else{$greet="Good evening";}


?>







<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Alex-A very bad guy</title>
</head>
<style>
    @keyframes examples {
  0%   {background-color:orangered;}
  25%{color: wheat;}
  50%  {background-color:green ; }
  70%{color: coral;}
  75%  {color:rgb(247, 247, 247);background-color:dodgerblue ;;}
  100% {background-color:yellow ;}
}


.yy{animation-name: examples;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-delay: 0.1s;
}

    body {
        background-color: <?php echo $back;?>;
        color: <?php echo $text;?>;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 1.3vw;
    }

@media only screen and (max-width:768px){
.bb{display: none;}
.tr{font-size: 2vw;}
#top{ width: 99%;}
}
@media only screen and (max-height:200px){.tr{display: none;}
}


#ee {background-color: <?php echo $back;?>;
    color: <?php echo $text;?>;
border: 2px solid <?php echo $text;?>;
border-radius: 5px; padding: 3%; font-size: 1.3vw;} 

#ee:hover 
    /*{background-color: <?php //echo $text;?>;
    color: <?php //echo $back;?>;
border: none;
    }*/
    {
        background-color: orangered;
        color:white;
    }


    .log {
        font-size: 3vw;
        text-decoration: none;
        color: <?php echo $text;?>;
        transition: 1.7s;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        
    }

    .log:hover {
        color: chocolate;
    }
    @keyframes example {
  0%   {left:0px; top:0px;}
  25%  {left:10px; top:0px;}
  50%  {left:10px; top:10px;}
  75%  {left:0px; top:-10px;}
  100%  {left:0px; top:0px;}
}

.we:hover {
        background-color: <?php echo $text;?>;
    /*cursor: wait;*/
    }
    .we:hover .f{
        color: <?php echo $back;?>;
    
    }


.ob{animation-name: example;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-delay: 0.1s;
position: relative;}


    a {
        color: <?php echo $text;?>;
        text-decoration: none;
    }

    a:hover {
        color: rgb(212, 101, 21);
    }

    #top {
        padding: 1%;
        margin: 1%;
    }

    .yo {
        position: relative;
        height: 50vh;
    }

    .yo h1 {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 4vw;
        text-align: center;
    }
    .tr{
        position: relative;
      
    }

    .tr p {
        position: absolute;
        
        left: 50%;
        transform: translate(-50%, -159%);
        font-size: 1.7vw;
        text-align: center;
    }
   

    ul {
        display: inline;
        list-style-type: none;
    }

    li {
        float: right;
        margin: 1%;
    }
    .w{color: orangered;}
    .w:hover{color: <?php echo $text;?>;}
</style>
<!--<script>
function myFunction() {
    alert("Omo I don bad small!!!!");
}
</script>
-->
<body>
    <div id="top"><a class="log" href="new.html"> ALEX'S HUB</a>
    
        <ul>
        <li><form method="POST"><input type="submit"  name="<?php echo $sw; ?>" id="ee" class="w" value="<?php echo $mode;?>"></form></li>
            <li><a href="" class="w">SUPPORT<span class="ob">$</span></a></li>
            <span class="bb"><li><a href="">CONTACT ME</a></li></span>
            <span class="bb"><li><a href="">ABOUT</a></li></span>
            <span class="bb"><li><a href="">PRODUCTS & SERVICES</a></li></span>

        </ul>
    </div>
   <p style="margin: 1%;padding:1%;font-family: Arial, Helvetica, sans-serif;"><?php echo $greet; ?></p>
<table style="width: 100%;">
    <tr><td>
    <div class="yo">
        <h1>SEE THE <span class="yy">WORLD</span> THROUGH MY EYES</h1></div>
        </td></tr>
        <tr><td>
<div class="tr"> <p>What inspires me to challenge myself to write new&nbsp;<code class="we"><span style="color: blue;">lines&nbsp;</span><span class="f">of</span><span style="color: red;">&nbsp;codes</span></code> everyday?<br>Take a tour through my mind
        </p>
    </div>
    </td></tr>

    </table>
</body>

</html>