<!doctype html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
  <script src="https://unpkg.com/scrollreveal@4"></script>
<title>AirUp-Home</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');
  html{
    overflow-x: hidden;
  }
body
{
font-family: 'EB Garamond';
}

.flex-container {
    display: flex;

    height: 490px;
    border-radius: 25px;
}


.f1r {
  background-image: url('startup1.jpg');
  background-repeat: no-repeat;
  background-size: 100% 85%;
  margin-top:1%;
    flex: 3;

}  
.h11 {
  text-align: center;
  color:#6D2FD1;
}

* { text-decoration: none;}
.f1l {
    
    flex: 4;
    background-color: white;

}    
        .head{
            padding:5px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
        }
        .box{
            margin:0.2%;
            padding:5px;
            background-color: white;
        }
        .box1{
            flex:1;
            padding:12px;
            border-radius:35px 0px 35px 0px;
        }
        .box2{
            flex:6;
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            background-color: #b3f1c0;
            margin-left: 45%;
            height:50px;
            width:100px;
            margin-top:1.3%;
        }
        #ft{
            font-family: 'EB Garamond';
            margin:0.5%;
            margin-left:1%;
            font-size: 50px;
            color:#6D2FD1;
        }
        #ft1{
            font-family: 'EB Garamond';
            margin:0.5%;
            font-size: 50px;
            color:black;
        }
        
        .navi{
            margin-top:-3.5%;
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .na{
            flex:1;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
        }
        .na:hover{
            background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(255, 255, 255, 0.582);
        }
        #naa{
            text-decoration:none;
            color:black;
            font-size:18px;
            font-family: 'Space Grotesk', sans-serif;
        }
        .na:hover #naa{
            color:black;
        }
        .na1{
          background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(0,0,0,0.3);
        }
        .na1 #naa{
            color:black;
        }
        .video
        {
          margin-top: 2%;
        }
        
.f1l{
  margin-top:137px;
  margin-bottom: 137px;
    margin-right: 10px;
    margin-left: 5px;
    background-image: url('bulb.png');
    border-top-right-radius: 95px;
    border-bottom-left-radius: 95px;
    background-repeat: no-repeat;
  
} 
.f1r {

    margin-right: 20px;
} 
.tag
{
  text-align: center;
  color: black;
}
.video
{
  border-radius: 20px;
}
.bt
{
  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
  background-color: #6D2FD1;
  color: white;
  border-radius: 20px;
  height: 30px;
  width: 100px;
  border: none;
}
.bt:hover {
  background-color:#fbadd5;
  cursor:pointer;
}
.f2o
{
  background-image: url(https://globalfishingwatch.org/wp-content/uploads/Satellite-radar-reveals-dark-vessels-no-logo.gif);
    height: 490px;
   border-top-right-radius:70px ;
   border-bottom-left-radius:70px;
    background-repeat: no-repeat;
  background-size: 100% 100%;
}
.f2i
{
margin-left: 25%;
}

.box1.na.f2o.f2i.el.er.ir.il{
  visibility:hidden;
}
.eout {
    display: flex;
    background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
    border-bottom-right-radius: 40px;
    border-top-left-radius: 40px;
   
}

.el {
    flex: 1;
}  
.er {
    flex: 1;
    height: 400px;
    width: 579px;
    background-image:url('ent.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-bottom-right-radius: 40px;
    border-top-left-radius: 40px;
}
.el{
  border-bottom-right-radius: 40px;
    border-top-left-radius: 40px;
    margin-right: 20px;
    margin-left: 10px;
    margin-top: 1%;
    background-image:url('el.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    margin-bottom: 1%;
  
} 
.er{
  margin-top: 1%;
    margin-bottom: 1%;
    margin-right: 20px;
}
.bt1
{
  box-shadow: 25px 25px 25px rgba(255, 255, 255, 0.3);
  background-color: #6D2FD1;
  color: white;
  border-radius: 20px;
  height: 30px;
  width: 100px;
  border: none;
  left:200%;
}
.bt1:hover {
  background-color: 
  #fbadd5;
}
.button-29 {
  align-items: center;
  appearance: none;
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 38px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
  cursor:pointer;
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
.iout
{
  display: flex;
    background-image: url('https://images.unsplash.com/photo-1483699606544-d42248fceac8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=951&q=80');
    border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
} 
.ir
{
  flex: 1;
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
    margin-right: 20px;
   
    margin-top: 1%;
    background-image:url('invest.png');
    background-repeat: no-repeat;
    margin-bottom: 1%;
}
.il 
{
    flex: 1;
    height: 400px;
    width: 579px;
    background-image:url('il.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
    margin-top: 1%;
    margin-bottom: 1%;
    margin-right: 20px;
    margin-left: 10px;
}
html
{
  scroll-behavior: smooth;
}
.fomain {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  background-color:#c2dcff;
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
}

.fo1{
  border-bottom-left-radius: 40px;
  flex: 33.33%;

  background-color: whitesmoke;
 
}
.fo2{
  border-top-right-radius: 40px;
    
  flex: 33.33%;
  background-color: whitesmoke;

}
.fo3{
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
  flex: 33.33%;

}
.bo{
  margin-left: 8%;
  margin-top: 5%;

   }
.bo1{
    flex:1;
    width:40%;

    border-radius:35px 0px 35px 0px;
    }
    table {
  border-spacing: 10px;
}
.in
{
width: 50%;
height: 13%;
border: none;
background-color: #e3edf9;
border-top-right-radius: 15px;
border-bottom-left-radius: 15px;
}
.glow{
  min-height:40vh;
  margin-top:-11%;
  border-left:3px solid;
  margin-bottom:1%;
}
.glow1{
  min-height:40vh;
  border-left:3px solid;
  margin-bottom:1%;
}
.com{
  visibility:hidden;
}
</style>
</head>
<body>
  <div class="head">
    <div class="box box1">&nbsp;&nbsp;<span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
    <div class="box box2">
      <div class="temp">
        <div class="navi">
            <div class="na na1"><a id="naa" href="">Home</a></div>
            <div class="na na5"><a id="naa" href="http://localhost/AIRUP/form/courses.php">Hackathons</a></div>
            <div class="na na3"><a id="naa" href="http://localhost/AIRUP/support/sup.php">Contact</a></div>
            <div class="na na4"><a id="naa" href="">About</a></div>
          </div>
        </div>
    </div>
</div>
<br><br>
<div class="flex-container">

  <div class="f1l widget">
    <br>
    <h1 class="h11">
      <a href="" class="typewrite" data-period="1700" data-type='[ "Welcome to world of Startups !", "AIRUP", "Let us develop the world !?" ]'>
        <span class="wrap"></span>
      </a>
    </h1>
    <span class="tag"><pre><i><b>"en route your business with us"</b></i>


    <a href="#eo"><button class="bt">Explore now</button></a></pre>
  </div></span>
  
  <div class="f1r widget">
  </div>
  
</div>
<div style="border-image: linear-gradient(to right, #efefbb, #d4d3dd) 1;margin-left:7%;width:100%;margin-top:-10%;min-height:20vh;" class="glow com"></div>
<div style="margin-left:5%;margin-top:1%;margin-bottom:1%;width:100%;height:5vh;" class="icon1 com"><img width="50px" height="50px" src="coding.png" alt="other">
</div>
<div style="border-image: linear-gradient(to right, #dae2f8, #d6a4a4) 1;margin-left:7%;width:100%;margin-top:3%;" class="glow1 com">
</div>

<div class="f2o">
  <div class="f2i">
    <video width="700" height="800" autoplay muted loop class="video">
      <source src="v1.mp4" type="video/mp4">
    </video>
  </div>
</div>
<div style="border-image: linear-gradient(to right, #efefbb, #d4d3dd) 1;margin-left:7%;width:100%;margin-top:1%;" class="glow com"></div>
<div style="margin-left:5.5%;margin-top:1%;margin-bottom:1%;width:100%;height:5vh;" class="icon1 com"><img width="70px" height="70px" src="vision.png" alt="other"></div>
<div style="border-image: linear-gradient(to right, #dae2f8, #d6a4a4) 1;margin-left:7%;width:100%;margin-top:4%;" class="glow1 com"></div>
<div class="eout">

  <div id="eo" class="el">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="http://localhost/AIRUP/check/Entreprenuer-Home.php"> <button class="button-29" role="button">Їппѵѳѵатё</button></a>
  </div> 
  <div class="er">
  </div>
</div>

<div style="border-image: linear-gradient(to right, #efefbb, #d4d3dd) 1;margin-left:7%;width:100%;margin-top:1%;min-height:20vh" class="glow com"></div>
<div style="margin-left:5%;margin-top:1%;margin-bottom:1%;width:100%;height:5vh;" class="icon1 com"><img width="50px" height="50px" src="investment.png" alt="other"></div>
<div style="border-image: linear-gradient(to right, #dae2f8, #d6a4a4) 1;margin-left:7%;width:100%;margin-top:3%;" class="glow1 com"></div>
<div class="iout">

  <div class="il">
  </div>
  
  <div class="ir">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://localhost/AIRUP/invest/Investors-Home.php"> <button class="button-29" role="button">Їпѵё$т</button></a>
  </div>
  
</div>

<br>
<br><br><br>
<br><br>
<script>
  ScrollReveal().reveal('.com',{ interval: 500 ,reset:true});
  ScrollReveal().reveal('.flex-container',{ duration: 4000 ,reset:true});
  ScrollReveal().reveal('.widget', { interval: 200 ,reset:true});
  ScrollReveal().reveal('.box1', { duration: 5000 ,reset:true});
  ScrollReveal().reveal('.na', { interval: 400 ,reset:true});
  ScrollReveal().reveal('.eout', { duration: 5000 ,reset:true});
  ScrollReveal().reveal('.el', { interval: 400 ,reset:true});
  ScrollReveal().reveal('.er', { interval: 400 ,reset:true});
  ScrollReveal().reveal('.f2o', { interval: 500 ,reset:true});
  ScrollReveal().reveal('.f2i', { interval: 500,reset:true });
  ScrollReveal().reveal('.iout', { duration: 6000 ,reset:true});
  ScrollReveal().reveal('.il', { interval: 400 ,reset:true});
  ScrollReveal().reveal('.ir', { interval: 500 ,reset:true});
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

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
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
</body>
<footer>
  <div class="fomain" id="con">
    <div class="fo1">
      <div class="bo bo1"><span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
      <b><pre>
     An Startup based investment comapany,
     which acts as an medium between Investor
     and Entreprenuer
      </pre></b>

      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us:</h3>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png" height="40px" width="40px"> &nbsp;&nbsp;&nbsp;<img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" height="40px" width="40px">&nbsp;&nbsp;&nbsp; <img height="40px" width="40px" src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
    </div>
    <div class="fo2">
      <br>
    <h3>&nbsp;&nbsp;Useful Links</h3>
    <table>
      <tr>
        <td>Features</td>
        <td>About</td>
      <tr>
        <tr>
          <td>Development Support</td>
          <td>Innovation support</td>
        <tr>
          <tr>
            <td>Apply Provitional patent</td>
            <td>Apply AirUp patent</td>
          <tr>
            <tr>
              <td>Report Issue</td>
              <td>Feedback</td>
            <tr>
    </table>
    </div>
    <div class="fo3">
      <br>
      
    <h3 style="text-align:center;"><u>Subscribe Us</u></h3>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
      <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src ="infi.png" height="90px" width="90px" >
     <p style="text-align: center ; font-size: small;">Copyright &copy; 2024, All Right Reserved <a href="#">Team INFINITI</a></p>
  </div>
  </div>
</footer>

</html>