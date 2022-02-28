<!DOCTYPE html>

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css-principal.css">

<style> 
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; 
  background-color:#3CB371; 
    background-color: rgba(60, 179, 113, 0.6);
  padding-top: 50px;
  padding-bottom: 50px;

}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */

}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}




.sub-container-resu-pop{
  max-width: 90%;
  max-height:70%;
  margin: auto;
  padding: 10px;
  
  overflow: auto;

}

.foto-product-resu-pop{
  float: left;
  max-width: 100%;
  max-height: 100%;
  margin-left: 100px; 
  
}
.fotoactual-product-resu-pop{
  width: 300px;
}

.detallsproducte-resu-pop{
  float: right;
  max-width: 50%;
  max-height: 70%; 
  margin: auto;
  padding: 3px;


}

.continguts-detallproducte-resu-pop{
  max-width : 300px;
    word-wrap: break-word;

}


@media only screen and (max-width: 700px){
  
  .modal-content {
  background-color: #fefefe;
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
  
}




  .sub-container-resu-pop{
  width: 90%;
  height:100%;
  padding: 10px;
  
 

} 
  
  
  .foto-product-resu-pop{
 
  max-width: 100%;
  max-height: 100%;
 margin: 50px; 
  
}  
.fotoactual-product-resu-pop{
 width: 300px;

}

.detallsproducte-resu-pop{
  
  max-width: 100%;
  max-height: 70%; 
  margin: auto;
  padding: 3px;
      }

      .continguts-detallproducte-resu-pop{

        max-width : 300px;
    word-wrap: break-word;
}

/*      */




    }

 
   
.container-fullcostat-buscador{
  width: 900px; 

}


   .fullcostat-buscador{
     width: 100%;
     height: auto; 
    background-image: url("theimages/fullcostat.png"); /* The image used */
 
 background-position: center; /* Center the image */
 background-repeat: no-repeat; /* Do not repeat the image */
 background-size: cover; 
   }

   .container-fullqstat-gran{
     width: 100%;
     height: 500px; 
     
   }

   .text-fullqstat-gran{
     width: 100%; 
     word-wrap: break-word;
     background-color: purple; 
   }
   .responsive {
  max-width: 100%;
  height: auto;
  
}

.center-fullcostat{
  padding-left: 15%;
  padding-right: 15%; 
  position: relative;
 
}

.title-fullqstat-gran{
  margin-left: 10px; 
  color: green; 

}
.subtitle-fullqstat-gran{
  padding-left: 40px; 
  
}
.sub-subtitle-fullqstat-gran{
  padding-left: 0px; 
  margin-top: 20px; 
}

.first-animation-container{
  margin-left:60%;
  
}
.second-animation-container{
  margin-left:1%; 
 
}
.third-animation-container{
  margin-left:10%; 
  display: none; 
}

.animation-container{
 
 position: absolute;
 width: 100px;
 height: 100px;

}

.burst{
  position:absolute;

}
.line{
  position: absolute;
  background: #fff;
  width: 10px;
  height:10px;
}
.line:nth-child(1){
  background-color: blue;
  animation: move01 3s linear infinite;

}

@keyframes move01{
  0%{
    transform: translate(0, 0);
    opacity:0;
  }
  50%{
    transform: translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(2){
  background-color: green;
  animation: move02 3s linear infinite;

}

@keyframes move02{
  0%{
    transform: rotate(45deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(45deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(45deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(3){
  background-color: purple;
  animation: move03 3s linear infinite;

}

@keyframes move03{
  0%{
    transform: rotate(90deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(90deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(90deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(4){
  background-color: yellow;
  animation: move04 3s linear infinite;

}

@keyframes move04{
  0%{
    transform: rotate(135deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(135deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(135deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(5){
  background-color: orange;
  animation: move05 3s linear infinite;

}

@keyframes move05{
  0%{
    transform: rotate(180deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(180deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(180deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(6){
  background-color: brown;
  animation: move06 3s linear infinite;

}

@keyframes move06{
  0%{
    transform: rotate(225deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(225deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(225deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(7){
  background-color: red;
  animation: move07 3s linear infinite;

}

@keyframes move07{
  0%{
    transform: rotate(270deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(270deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(270deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(8){
  background-color: violet;
  animation: move08 3s linear infinite;

}

@keyframes move08{
  0%{
    transform: rotate(315deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(315deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(315deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(9){
  background-color: violet;
  animation: move09 4s linear infinite;

}

@keyframes move09{
  0%{
    transform: rotate(345deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(345deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(345deg) translate(0, -100px);
    opacity:0;
  }
}
.line:nth-child(10){
  background-color: green;
  animation: move010 4s linear infinite;

}

@keyframes move010{
  0%{
    transform: rotate(75deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(75deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(75deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(11){
  background-color: green;
  animation: move011 4s linear infinite;

}

@keyframes move011{
  0%{
    transform: rotate(115deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(115deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(115deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(12){
  background-color: green;
  animation: move012 4s linear infinite;

}

@keyframes move012{
  0%{
    transform: rotate(200deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(200deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(200deg) translate(0, -100px);
    opacity:0;
  }
}

.line:nth-child(13){
  background-color: green;
  animation: move013 4s linear infinite;

}

@keyframes move013{
  0%{
    transform: rotate(275deg) translate(0, 0);
    opacity:0;
  }
  50%{
    transform: rotate(275deg) translate(0, -70px);
    opacity:1;
  }
  100%{
    transform: rotate(275deg) translate(0, -100px);
    opacity:0;
  }
}



.lines {
  line-height: 2;
  text-align: center;
}
.lines span {
  margin-top:10%;
  display: inline-block;
  position: relative; 
   
}
.lines span:before,
.lines span:after {
  content: "";
  margin-top:10%;
  position: absolute;
  height: 5px;
  border-bottom: 5px solid  rgba(82, 197, 82, 0.8);
  top: 0;
  width: 150px;
  margin-left: 5%;
  margin-right: 5%;
}
.lines span:before {
  margin-top: 10%;
  right: 100%;
  margin-right: 25px;
}
.lines span:after {
  margin-top: 10%;
  left: 100%;
  margin-left: 25px;
}


@media only screen and (min-width: 900px){  

.space-between-lines{
 
  height:100px; 
}

   }
</style> 

</head>

<body>


<div class="container-fullqstat-gran">

<div class="center-fullcostat">

<div class="fontsize-big-buscador">
<div class="title-fullqstat-gran"><p> Quan comprem al poble, ajudem... </p> </div> 
</div>

<div class="fontsize-normal-buscador">

  <div class="second-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div>
  
</div> 
</div>
</div> 
  <div class="subtitle-fullqstat-gran">
  <p> <div class="dot"></div> Al les petites botigues </p>
  <p> <div class="dot"></div> A persones com nosaltres </p>
  <p> <div class="dot"></div> Al teixit comercial de la nostra vila </p>
  </div> 
  
  <div class="sub-subtitle-fullqstat-gran">
  <a href="#"> Per què comerç local? </a> 
  </div> 

<div class="first-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div> 
</div>
</div> 



  
 </div>

 <div class="third-animation-container">
<div class="animation-container">
<div class="burst">
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  <div class="line"></div> 
  
</div> 
</div>
</div> 

<div class="">
<img src="theimages/fullqstat.png" alt="#" class="responsive" width="923" height="407">
</div> 

</div> 
</div> 

<!--END fullalqstat gran -->

<div class="space-between-lines">

</div>

<div class='lines'>
<div class="fontsize-big-buscador">
  <span>Etiquetes</span>
  </div> 
</div>


</body> 

<foot>




</foot>

</html> 