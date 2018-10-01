<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ask?Pizza</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <?php session_start(); ?>
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
    background-color: white;
    background :  url(images/wood.jpeg);
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    padding: 70px 0;
  font: 15px/20px Arial, sans-serif;
}

.container {
  margin: 0 auto;
  width: 500px;
  height: 300px;
  position: relative;
  perspective: 1000px;

}

.carousel {
  height: 100%;
  width: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: transform 1s;
}

.item {
  margin-left: 20%;
  margin-right: 10%;
  top :  80px;
  display: block;
  position: absolute;
  background: #000;
  width: 300px;
  height: 300px;
  line-height: 100px;
  font-size: 2em;
  text-align: center;
  color: #afafafaa;
  opacity: 0.95;
  border-radius: 10px;
}

.a {
  transform: rotateY(0deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(images/img-veg.jpg);
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.b {
  transform: rotateY(60deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(images/img-nonveg.jpg);
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.c {
  transform: rotateY(120deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(https://firebasestorage.googleapis.com/v0/b/myfirst-project-4fa08.appspot.com/o/photos%2Fcategory%2Fthumb_burgers.jpg?alt=media&token=478765c9-6e9a-4cc5-b3dd-4e66477fe597);
          -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
.d {
  transform: rotateY(180deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(images/beverages2.jpg);
}
.e {
  transform: rotateY(240deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(images/sides.jpg);
} 
.f {
  transform: rotateY(300deg) translateZ(400px);
  background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
  url(images/img-veg.jpg);
      -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.next, .prev {
  background: rgba(204, 204, 204, 0);
  color: #000;
  position: absolute;
  top: 250px;
  width: 20px;
  padding: 1em 2em;
  cursor: pointer;
}
.next:hover, .prev:hover { color: #000;
  background: rgba(204, 204, 204, 0.5);
 }
.next:active, .prev:active {
  box-shadow: 0 1px 0 #999;
}
.next {  
  left : 90%;
}
.prev {
  left: 5%;
}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="carousel">
    <div class="item a">Veg</div>
    <div class="item b">Non-Veg</div>
    <div class="item c">Burgers</div>
    <div class="item d">Beverages</div>
    <div class="item e">Sides</div>
    <div class="item f">Others</div>
  </div>
</div>
<div class="next">></div>
<div class="prev"><</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>
</body>
</html>