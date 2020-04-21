
<div class="row"> 
    <div class="col-md-12 frame frame_header">
      <img src="<?= $routes["img_layout_frame_2"] ?>">
      <div class="anim">
          <h1>Qwerty</h1>
          <h2>Programando el futuro</h2>
          <p>Queremos conocer tu idea </p>
          <p>empecemos con tu proyecto  </p>
        <a class="btn btn-warning" href="">¡Empecemos con tu proyecto!</a>
      </div>
      <div class="img_header pc">
            <img class="floating " src="img/content/compu.webp"   style="" > 
      </div>             
    </div>  
</div>

<style>
.img_header{ 
    position: absolute;
    top: 15%;
    right: 12%;
} 

.anim { 
    position: absolute;
    top: 25%;
    left: 10%;
}

.anim h1{
  font-size: 4.5rem;
  text-align:left;
}
.anim h2{
  font-size: 1.5rem;
  text-align:left;
  color:white;
}

.anim p{
  font-size: 1rem;
  text-align:left;
 
}

.pc {  
   width: 370px;   
}
.screen {
  position:absolute;
   
}

#screen1{
  top: 20%;
  right: 15%; 
  width: 220px; 
}
#screen2{
  top: 45%;
  right: 10%; 
  width: 120px; 
}
#screen3{
  top: 55%;
  right: 20%;
  width: 120px; 
}
#screen4{
  top: 30%;
  right: 28%;
  width: 120px; 
}
#screen5{
  top: 55%;
  right: 32%;
  width: 120px; 
}


.floating {     
  position: absolute;
    animation-name: floating;
    animation-duration: 6s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    margin-left: 30px;
    margin-top: 5px;
}

@keyframes floating {
  0% {		
		transform: translatey(0px);
	}
	50% {	
		transform: translatey(-20px);
	}
	100% {		
		transform: translatey(0px);
	}   
}
</style>

