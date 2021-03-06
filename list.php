<html> 	
<head>
<title>Ask?Pizza</title>
<style >
<?php session_start(); ?> 
body{
  background: url("images/wood.jpeg");
  background-repeat: no-repeat;
  background-attachment: fixed;
   -webkit-background-size: 100% 100%;
  -moz-background-size:100% 100%;
  -o-background-size:100% 100%;
  background-size: 100% 100%;
}

.button {
  color: #FFFFFF;
  cursor: pointer;
  align-self: center;
  background: #00FF00;
  text-align: center;
  width: 100%;
  height: 25px;
  border :  0px;
}

.button:hover {
  color: #00FF00;
  background: #FFFFFF;
}

.modalbg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0);
  z-index: 99999;

  -moz-transition: all 2s ease-out;
  -webkit-transition: all 2s ease-out;
  -o-transition: all 2s ease-out;
  transition: all 2s ease-out;

  -webkit-transition-delay: 0.2s;
  -moz-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  -transition-delay: 0.2s;

  display: block;
  pointer-events: none;
}

.modalbg .dialog {

  width: 40%;
  height: auto;
  position: relative;
  top: -1000px;
  margin: 10% auto;
  padding-top: 5px;
  padding-bottom: 5px;
  background: #fff;

  background: -moz-linear-gradient(#fff, #ccc);
  background: -webkit-linear-gradient(#fff, #ccc);
  background: -o-linear-gradient(#fff, #ccc);
  box-shadow: 0 0 5px #000;
  -moz-box-shadow: 0 0 5px #000;
  -webkit-box-shadow: 0 0 5px #000;
}

.modalbg .dialog .ie7 {
  filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);
}

.modalbg:target {
  display: block;
  pointer-events: auto;
  background: rgba(4, 10, 30, 0.8);
  -moz-transition: all 0.2s ease-out;
  -webkit-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

.modalbg:target .dialog {
  top: -20px;
  -moz-transition: all 0.4s ease-out;
  -webkit-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  -webkit-transition-delay: 0.2s;
  -moz-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  -transition-delay: 0.2s;
}

.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 35px;
  position: absolute;  right: 0px;
  text-align: center;
  top: 0px;
  width: 35px;
  padding :  5px;
  text-decoration: none;
  font-weight: bold;
  ......................................................................................
  box-shadow: 0 0 10px #000;
  -moz-box-shadow: 0 0 5px #000;
  -webkit-box-shadow: 0 0 5px #000;
  -moz-transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
  -webkit-transition-delay: 0.2s;
  -moz-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  -transition-delay: 0.2s;
}

.close .ie7 {
  filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);
}

.close:hover {
  background: #00d9ff;
  -moz-transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
}

.fineprint {
  font-style: italic;
  font-size: 10px;
  color: #646;
}

/* =============================================================================================================*/

.card{
    width: 100%;
    overflow: auto;
    height: auto;
    padding-top: 20px;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }

.veg{
  /*background: #fff;

  background: -moz-linear-gradient(#8f8, #fff);
  background: -webkit-linear-gradient(#8f8, #fff);
  background: -o-linear-gradient(#8f8, #fff);*/
}

.non-veg{
  /*
  background: #fff;
  background: -moz-linear-gradient(#f88, #fff);
  background: -webkit-linear-gradient(#f88, #fff);
  background: -o-linear-gradient(#f88, #fff);
*/
}

.pizza{
  display: inline-block;
  border-color: white;
  border-width: 1px;
  margin-left:  3%;
  margin-right: 3%;
  margin-bottom: 1%;
  margin-top: 1%;
  border-style: solid;
  width : 250px ;
  background-color: #FFFFFF;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  height : auto;
}

img{
  height: auto;
  -webkit-filter: blur(0.3px); 
  filter: blur(0.3px);  
}

.modalbg:hover img{
  -webkit-filter: blur(0px);
  filter: blur(0px);    
}

.pizza:hover img{
  -webkit-filter: blur(0px);
  filter: blur(0px);
}

.pizza:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#quan{
  margin :  5%;  
  width: 50%;
  padding : 2%;
}


.quanchange{
  color: #FFFFFF;
  cursor: pointer;
  align-self: center;
  background: #00FF00;
  text-align: center;
  width: 20px;
  float: left;
  height: 30px;
  border :  0px;  
  position: relative;
}

#imgdiv{
  width: 180px;
  float: left;
}

#menucard {
  height: auto;
  width: 100%;
  background: #ffffff;
  display: inline-block;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); 
  overflow: auto;
}

.catbtn{
  color: #FFFFFF;
  cursor: pointer;
  align-self: center;
  background: #00FF00;
  text-align: center;
  width: auto;
  float: left;
  height: 30px;
  border :  0px;  
  position: relative;
}



#catdiv{
  display: inline-block;
  width: 50%;
  height: 20px;
}
  
.name{
  text-align: left;
  width: 100%;
  padding :  2px 10px;
}

.order {
  text-align: right;
  background-color: #f9f9f9;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown{
  display: inline-block;
  position: relative;
}
</style>
</head>
<body>
<script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
<script>

var cur_url = "";
var cur_name = "";
var default_size = 1;
var quantity = 1;
var cost1 = 400;

function addQuantity(lo){
  quantity++;
  document.getElementById("quantity_id").innerHTML = "Quantity = "+ quantity;
  document.getElementById("totalPrize").innerHTML = "Total = Rs. "+quantity*default_size*idarr[lo].val().cost;
}

function subQuantity(lo){
  if(quantity==1){
    alert("Invalid !");
  }
  else{
    quantity--;
    document.getElementById("quantity_id").innerHTML = "Quantity = "+ quantity;
    document.getElementById("totalPrize").innerHTML = "Total = Rs. "+quantity*default_size*idarr[lo].val().cost;
  }
}

function cool()
{
  location.href="#close";
}

function myFunction(lo){
location.href="#openModal";
  document.getElementById('modalimage').setAttribute("src",idarr[lo-1].val().url);
  cur_url = idarr[lo-1].val().url;
  cur_name = idarr[lo-1].key;
  document.getElementById('modaltitle').innerHTML = idarr[lo-1].key;
  document.getElementById('placeorde3');
}

function setSize(sz,lo){
  if(sz==1){
    default_size=0.8;
  }
  else if(sz==2){
    default_size = 1;
  }
  else {
    default_size = 1.2;
  }
  document.getElementById("quantity_id").innerHTML = "Quantity = "+ quantity;
    document.getElementById("totalPrize").innerHTML = "Total = Rs. "+quantity*default_size*idarr[lo].val().cost;
}

function placeOrder(lo){
  var url = cur_url;
  var tot = quantity*default_size*idarr[lo].val().cost;
  var name = cur_name;
  var selquan = quantity;
  default_size = 1;
  quantity = 1;
  //alert(name+" "+url);
  document.getElementById("quantity_id").innerHTML = "Quantity = "+ quantity;
  document.getElementById("totalPrize").innerHTML = "Total = Rs. "+quantity*default_size*idarr[lo].val().cost;

  //var str="?url="+url+"&total="+tot+"&name="+name+"&quantity="+selquan;
  //alert(str);
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert(String(this.responseText));
      //document.getElementById("txtHint").innerHTML = this.responseText;  
    }
  };
  var the_data = ''
    + 'url=' + window.encodeURIComponent(url)
    + '&name=' + window.encodeURIComponent(name)
    + '&total=' + window.encodeURIComponent(tot)
    + '&quantity=' + window.encodeURIComponent(selquan);
  xhttp.open("POST", "addOrder.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(the_data);
}

var bool = true;
var idarr=new Array();
var cnt = 0 ;
location.href="#close";
window.onload = function () 
{
  var categoryselected;
  var url = window.location.href,  params = url.split('?')[1].split('&'),  data = {}, tmp;
  for (var i = 0, l = params.length; i < l; i++) 
  {
    tmp = params[i].split('=');
    tmp1 = tmp[1].split('#')
    data[tmp[0]] = tmp1[0];
  }
  //alert("data name " + data.name);
  categoryselected = data.name;

  //alert("category selected "+categoryselected);
  location.href="#close";

  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAxnwh1OAWQ-7b6q7DPwmDEYyWEPh_Y8h0",
    authDomain: "myfirst-project-4fa08.firebaseapp.com",
    databaseURL: "https://myfirst-project-4fa08.firebaseio.com",
    projectId: "myfirst-project-4fa08",
    storageBucket: "myfirst-project-4fa08.appspot.com",
    messagingSenderId: "316859541433"
  };
	firebase.initializeApp(config);


  function callcard(cat){

  var Card = document.createElement('div');
  Card.setAttribute("class",cat+ " card");
  document.body.appendChild(Card);
  var arr = firebase.database().ref().child('pizza-delivery-system/pizza/'+cat+'/');	
  arr.once('value',function(snap){
  	snap.forEach(function(item) {
  	idarr[cnt]=item;
    cnt++;
    var itemVal = item.key;
		var newElement = document.createElement('div');
		newElement.id = "pizza"; 
		newElement.className = "pizza col-lg-4";

    var mycss = "width: 250px;  ";
		var image = document.createElement("img");
		image.setAttribute("src",item.val().url);
		image.setAttribute("style",mycss);
    image.setAttribute("id","menuimage");
		image.setAttribute("alt","Pizza Image");

		var hr = document.createElement('hr');
				
		var dropdown = document.createElement('div');
		dropdown.setAttribute("class","dropdown");

		var name = document.createElement('div');
		name.setAttribute("class","name");
		name.innerHTML = '<h4>'+item.key+'</h4><br><p>'+item.val().flavour+'</p>';

		var order = document.createElement('div');
		order.setAttribute("class","order");

    var btn = document.createElement('button');
    btn.setAttribute("class","button");
    btn.setAttribute("name",cnt);
    btn.setAttribute("id","orderme");
    btn.setAttribute("onclick","myFunction("+cnt+")");
	  btn.setAttribute("href","#openModal")
    btn.innerHTML = "Order";

    var dialog = document.getElementById('dialog');
    
    var ordercard = document.createElement('div');
    ordercard.setAttribute("id","menucard");
  
    var imgdiv = document.createElement('div');
    imgdiv.setAttribute("id","imgdiv");

    var modalimage = document.createElement('img');
    modalimage.setAttribute("width","180px");
    modalimage.setAttribute("id","modalimage");

    var rgtdet = document.createElement('div');
    rgtdet.setAttribute("id","rgtdet");
    
    var modaltitle = document.createElement('h5');
    modaltitle.setAttribute("id","modaltitle");

    var btnplace = document.createElement('button');
    btnplace.setAttribute("class","button");
    btnplace.setAttribute("id","placeorder");
    btnplace.setAttribute("onclick","placeOrder("+cnt+")");
    btnplace.innerHTML = "Add Order";
    
    var add = document.createElement('button');
    add.setAttribute("id","addmore");
    add.setAttribute("class","quanchange");
    add.setAttribute("onclick","addQuantity("+cnt+")");
    add.innerHTML = "+";

    var span = document.createElement("span");
    span.innerHTML = "&nbsp;"

    var sub = document.createElement('button');
    sub.setAttribute("id","submore");
    sub.setAttribute("class","quanchange");
    sub.setAttribute("onclick","subQuantity("+cnt+")");
    sub.innerHTML = "-";


    var quan = document.createElement("div");
    quan.setAttribute("id","quan");
    quan.appendChild(add);
    quan.appendChild(span);
    quan.appendChild(sub);

    var type = document.createElement("div");
    type.setAttribute("id","catdiv");

    var catbtn1 = document.createElement("button");
    catbtn1.setAttribute("class","catbtn");
    catbtn1.setAttribute("id","catbtn1");
    catbtn1.setAttribute("onclick","setSize("+1+","+cnt+")");
    catbtn1.setAttribute("name","small");
    catbtn1.innerHTML = "small";
    type.appendChild(catbtn1);
    
    var catbtn2 = document.createElement("button");
    catbtn2.setAttribute("class","catbtn");
    catbtn2.setAttribute("id","catbtn2");
    catbtn2.setAttribute("onclick","setSize("+2+","+cnt+")");
    catbtn2.setAttribute("name","medium");
    catbtn2.innerHTML = "medium";
    type.appendChild(catbtn2);

    var catbtn3 = document.createElement("button");
    catbtn3.setAttribute("class","catbtn");
    catbtn3.setAttribute("id","catbtn3");
    catbtn3.setAttribute("onclick","setSize("+3+","+cnt+")");
    catbtn3.setAttribute("name","large");
    catbtn3.innerHTML = "large";
    type.appendChild(catbtn3);

    var quant1 = document.createElement("p");
    quant1.innerHTML = "Quantity = "+quantity;
    quant1.setAttribute("id","quantity_id");

    var total1 = document.createElement("p")
    total1.setAttribute("id","totalPrize");
    total1.innerHTML = "Total = Rs. "+item.val().cost;


    if(bool==true){
      imgdiv.appendChild(modalimage);
      ordercard.appendChild(imgdiv);
      ordercard.appendChild(rgtdet);
      rgtdet.appendChild(modaltitle);
      rgtdet.appendChild(quan);
      rgtdet.appendChild(type);
      ordercard.appendChild(quant1);
      ordercard.appendChild(total1);
      ordercard.appendChild(btnplace);
      bool = false;
    } 
    dialog.appendChild(ordercard);
    
    location.href="#close";

    order.appendChild(btn);
		dropdown.appendChild(name);
		dropdown.appendChild(order);
		newElement.appendChild(image);
		newElement.appendChild(hr);
		newElement.appendChild(dropdown);
		Card.appendChild(newElement);
	});
  });
}



  document.getElementById('initialize');


  if(categoryselected==1){
    callcard("veg");
  }
  else if(categoryselected==2)
  {
    callcard("non-veg");
  }
  else{
    alert("Coming soon !");
    window.location.href = "http://localhost/WTL/home_page_frame.html";
  }
}

  </script>
<div id="openModal" class="modalbg">
  <div class="dialog" id = "dialog">
    <a ref="#close" title="Close" id="initialize" onclick="cool()" class="close">X</a>
    <h3>Order</h3>
    <hr>
  </div>
</div>
</body>