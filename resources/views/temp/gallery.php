<div class="screen">
<div class="Bol"></div>
</div>
  
<div class="img" style="margin-left:10%;">
  <a target="_blank" href=""><img src="https://tympanus.net/Development/BookBlock/images/demo1/1.jpg" alt="Klematis" width="110" height="90"/></a>
 <div class="desc"> image Description
   </div>
</div>
<div class="img">
  <a target="_blank" href=""><img src="https://tympanus.net/Development/BookBlock/images/demo1/2.jpg" alt="Klematis" width="110" height="90"/></a>
 <div class="desc">image Description</div>
</div>
<div class="img">
  <a target="_blank" href=""><img src="https://tympanus.net/Development/BookBlock/images/demo1/3.jpg" alt="Klematis" width="110" height="90"/></a>
 <div class="desc">image Description</div>
</div>
<div class="img">
  <a target="_blank" href="klematis4_big.htm"><img src="https://tympanus.net/Development/BookBlock/images/demo3/5.jpg" alt="Klematis" width="110" height="90"/></a>
 <div class="desc">image Description</div>
</div>






html{height:100%; width:100%;}

body{
  height:100%;
  width:100%;
  background-image: -webkit-gradient(
    linear,
	  80 bottom,
	  left 60,
	  color-stop(0, rgb(91,135,115)),
	  color-stop(0.57, rgb(66,110,110)));
  font-family:'lato';
  animation:bgfade 7s;
  -webkit-animation:bgfade 7s; /* Safari and Chrome */
  font-family: 'Open Sans', sans-serif;
}

.desc
{
  text-align: center;
  font-weight: normal;
  width: 100%;
  margin: 0px;
  visibility:hidden;
}

div:hover .desc {
  visibility:visible;
}
div.img img {max-width:100%;}
div.img{
  margin: 155px 5px 0px 0px;
  padding:5px;
  box-sizing:border-box;
  background:#f1f1f1;
  line-height:0px;
  height: auto;
  width: 20%;
  float: left;
  text-align: center;
  -webkit-transition:all 0.5s ease;
  -moz-transition:all 0.5s ease; 
  -o-transition:all 0.5s ease; 
  transition:all 0.5s ease;
  border-radius:4px;
}	
div:hover{line-height:30px;font-size:16px;}
div.img img
{
  display: inline-block;
  margin: 3px;
}

@keyframes bgfade
{
0%   {opacity:0;}
100% {opacity:1;}
}

@-webkit-keyframes bgfade /* Safari and Chrome */
{
0%   {opacity:0;}
100% {opacity:1;}
}
