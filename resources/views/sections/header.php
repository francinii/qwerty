
<div class="row"> 
    <div class="col-md-12 frame frame_header">
       <img src="<?= $routes["img_layout_frame_2"] ?>">
        <div class="anim">
        <h1 class="TiutloA">QWERTY</h1>
        <div class="ContAnimacion">
            <h2
                class="txt-rotate"
                data-period="100"
                data-rotate='[ "Qwerty...", "Programando el futuro." ]'>
            </h2>
        </div>           
            <h2>Programando el futuro.</h2>
        </div>
    </div>
</div>


<style>

.TiutloA{
    font-size: 5.5rem;
    font-family:'Roboto', sans-serif;
} 

.txt-rotate{}

.anim{
    position: absolute;
    top: 11%;
    left: 4%;
    color: #fff;
    width: 40%;
    height: 350px;
}

.ContAnimacion{
  text-align: center;

}



.ContAnimacion h2 span{
  font-size: 3.0rem;
  color: black;
  font-family: Courier New;
}



</style>

<script>


var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};



</script>
