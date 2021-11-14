<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Setting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <style>
    html,body{
      padding:0px;
      margin:0px;
    }
    @media only screen and (max-width: 320px) {
     body { font-size: 20px;
     }
   }
    .samples{
       text-shadow: 0px 1px 0px rgb(204, 204, 204), 0px 2px 0px rgb(201, 201, 201), 0px 3px 0px rgb(187, 187, 187), 0px 4px 0px rgb(185, 185, 185), 0px 5px 0px rgb(170, 170, 170), 0px 6px 1px rgba(0, 0, 0, 0.1), 0px 0px 5px rgba(0, 0, 0, 0.1), 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 3px 5px rgba(0, 0, 0, 0.2), 0px 5px 10px rgba(0, 0, 0, 0.25), 0px 20px 20px rgba(0, 0, 0, 0.15);
       color: #FFFFFF;
       font-family: 'League Gothic',Impact,sans-serif;
       letter-spacing: 0.02em;
       text-transform: uppercase;
       text-align: center;
       font-size: 40px;
       width:100%;
       margin:1px;
      }

      #waveCont{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 15%;
}
#waveCont > div{
  background-image: url(./mainfile/ocean-wave-md.png);
  background-repeat:repeat-x;
  background-size:contain;
  height: 100%;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
}
#wave1{
  z-index: 2;
  opacity: .4;
  animation: wave 50s linear infinite;
  -webkit-animation: wave 50s linear infinite;
}
div#wave2{
  opacity: .7;
  height: 80%;
  background-position: 3%;
  animation: wave 30s linear infinite;
  -webkit-animation: wave 30s linear infinite reverse;
}
@keyframes wave{
  0% {background-position: 0%;}
  100% {background-position: 100%;}
}
@-webkit-keyframes wave{
   0% {background-position: 0%;}
   100% {background-position: 100%;}
}
    </style>
    <div class="samples" style="margin-top:200px;">
      <p>ไม่พบหน้าเว็บ</p>
    </div>
    <div id="waveCont">
      <div id="wave1"></div>
      <div id="wave2"></div>
    </div>
  </body>
</html>
