<?php
  $rootPath = '../';
  $page = "thank-you";
  include('../parts/head.php');
  include('../parts/navbar.php');
  include('../parts/pop-up-form.php');
?>
<body id="thanks">

  <img id="clouds" src="clouds.svg" alt="TechLaunch - where you learn to code or we'll make you cry">
  <canvas id="canvas" ></canvas>
  <img id="monkey" src="monkey_rocket.svg" alt="Launch a Career towards the Future with TechLAunch">
  <img id="thank-you" src="thank_you3_2.svg" alt="Thanks for applying to TechLaunch - Miami's Best Code School">
  <h1>You just took your first step<br />in Launching a new Life</h1>
  <script type="text/javascript">
    var c = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    function sizeCanvas(){
      c.width = window.innerWidth;
      c.height = window.innerHeight;
    }
    window.addEventListener("resize", sizeCanvas);
    sizeCanvas();
    var NUM_CONFETTI = 350;
    var COLORS = [[85,71,106], [174,61,99], [219,56,83], [244,92,68], [248,182,70]];
    var PI_2 = 2*Math.PI;

    function range(a,b){
      return (b-a)*Math.random() + a;
    }

    function drawCircle(x,y,r,style){
      ctx.beginPath();
      ctx.arc(Math.floor(x),Math.floor(y),Math.ceil(r),0,PI_2,false);
      //if (Math.random() < 0.0001) console.log(style);
      ctx.fillStyle = style;
      ctx.fill()
    }

    var xpos = 0.5

    document.onmousemove = function(e){
      xpos = e.pageX/c.width;
    }

    function Confetti(){
      this.style = COLORS[Math.floor(range(0,5))];
      this.rgb = `rgba(${this.style[0]},${this.style[1]},${this.style[2]},`;
      this.r = Math.floor(range(0,6));
      this.r2 = this.r*2;
      this.replace();
    }
    Confetti.prototype.replace = function(){
      this.opacity = 0;
      this.dop = 0.03*range(1,4);
      this.x = range(this.r, c.width-this.r2);
      this.y = range(-20, c.height-this.r2);
      this.xmax = c.width - this.r;
      this.ymax = c.height - this.r;
      this.vx = range(0,2)+8*xpos-5;
      this.vy = 0.7*this.r + range(-1,1);
    }
    Confetti.prototype.draw = function(){
      this.x += this.vx;
      this.y += this.vy;
      this.opacity += this.dop;
      if (this.opacity > 1){
        this.opacity = 1;
        this.dop *= -1;
      }
      if (this.opacity < 0 || this.y > this.ymax){
        this.replace();
      }
      if (!(this.x > 0 && this.x< this.xmax) ){
        this.x = (this.x + this.xmax)%this.xmax;
      }
      drawCircle(this.x, this.y, this.r, this.rgb+this.opacity+")");
    }
    var confetti = [];
    for (var i = 0; i < NUM_CONFETTI; i++)
      confetti.push(new Confetti());

    function step(){
      ctx.clearRect(0,0,c.width,c.height);
      confetti.forEach(function(c){
        c.draw();
      });
      window.requestAnimationFrame(step);
    }
    setTimeout(step, 3000);
  </script>
</body>
</html>
