<?php
require('C:\xampp\htdocs\zazah\resources\templates\header3.php');
?>
<style>
/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

.column img {
    margin-top: 12px;
    width: 100%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 800px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
   }
}

.gal-container{
	padding: 12px;
}
.gal-item{
	overflow: hidden;
	padding: 3px;
}
.gal-item .box{
	height: 350px;
	overflow: hidden;
}
.box img{
	height: 100%;
	width: 100%;
	object-fit:cover;
	-o-object-fit:cover;
}
.gal-item a:focus{
	outline: none;
}
.gal-item a:after{
	content:"\e003";
	font-family: 'Glyphicons Halflings';
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 3px;
	left: 3px;
	top: 3px;
	bottom: 3px;
	text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
	opacity: 1;
}
.modal-open .gal-container .modal{
	background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
	padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
	box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
	outline: none;
}
.modal-open .gal-item button.close span{
	position: relative;
	top: -3px;
	font-weight: lighter;
	text-shadow:none;
}
.gal-container .modal-dialogue{
	width: 80%;
}
.gal-container .description{
	position: relative;
	height: 40px;
	top: -40px;
	padding: 10px 25px;
	background-color: rgba(0,0,0,0.5);
	color: #fff;
	text-align: left;
}
.gal-container .description h4{
	margin:0px;
	font-size: 15px;
	font-weight: 300;
	line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}

#htmlCus, #bodyCus {
  margin: 0;
  padding: 0;
}
.imageDiv {
  display: inline-block;
 height: 90vh;
 width: 100%;
 text-align: center;
}

#imgCus {
  height: 90%;
  width: auto;
  background: blue;
}

.modal-backdrop.in {
    opacity: 0.9;
}
</style>
<body>
  <div class="modal fade" id="1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent1.jpg">
        <p style="color:white;">Pastel on paper</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent2.jpg">
        <p style="color:white;">Pastel on paper</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent3.jpg">
        <p style="color:white;">Pastel on paper</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent4.jpg">
        <p style="color:white;">In a box: 'Earth's skin fragment'<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="5" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent5.jpg">
        <p style="color:white;">In a box: 'Earth's skin fragment'<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="6" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent6.jpg">
        <p style="color:white;">In a box: 'Earth's skin fragment'<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="7" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent7.jpg">
        <p style="color:white;">In a box: 'Fading moment'<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="8" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent8.jpg">
        <p style="color:white;">In a box: Untitled<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="9" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent9.jpg">
        <p style="color:white;">In a box: 'Earth's skin fragment'<br>
        box: 20cm x 15cm <br>
         work: pastel on paper, 10.8cm x 8cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="10" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent10.jpg">
        <p style="color:white;">Untitled <br>
        Pastel on paper <br>
        145cm x 110cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="11" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent11.jpg">
        <p style="color:white;">Untitled <br>
        Pastel on paper <br>
        145cm x 110cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="12" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent12.jpg">
        <p style="color:white;">Untitled <br>
        Pastel on paper <br>
        145cm x 110cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="13" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent13.jpg">
        <p style="color:white;">'Flower' <br>
        Pastel on paper <br>
        59.5cm x 42cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="14" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent14.jpg">
        <p style="color:white;">'Flower' <br>
        Pastel on paper <br>
        59.5cm x 42cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="15" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent15.jpg">
        <p style="color:white;">Untitled <br>
        Pastel on paper <br>
      65cm x 48cm</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="16" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <div class="imageDiv">
        <img id="imgCus"
        src="img/recent/recent16.jpg">
        <p style="color:white;"> Untitled<br>Pastel on paper <br>
        145cm x 110cm</p>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="text-align:center;">
    <h3>Recent work</h3>
    <div class="row">
      <div class="column">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="img/recent/recent1.jpg" alt="Pastel on paper">
        </a>
        <a href="#" data-toggle="modal" data-target="#5">
          <img src="img/recent/recent5.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#9">
          <img src="img/recent/recent9.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#13">
          <img src="img/recent/recent13.jpg">
        </a>
      </div>
      <div class="column">
        <a href="#" data-toggle="modal" data-target="#2">
          <img src="img/recent/recent2.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#6">
          <img src="img/recent/recent6.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#10">
          <img src="img/recent/recent10.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#14">
          <img src="img/recent/recent14.jpg">
        </a>
      </div>
      <div class="column">
        <a href="#" data-toggle="modal" data-target="#3">
          <img src="img/recent/recent3.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#7">
          <img src="img/recent/recent7.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#11">
          <img src="img/recent/recent11.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#15">
          <img src="img/recent/recent15.jpg">
        </a>
      </div>
      <div class="column">
        <a href="#" data-toggle="modal" data-target="#4">
          <img src="img/recent/recent4.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#8">
          <img src="img/recent/recent8.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#12">
          <img src="img/recent/recent12.jpg">
        </a>
        <a href="#" data-toggle="modal" data-target="#16">
          <img src="img/recent/recent16.jpg">
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
  </div>
</div>

<div class="row">
  <br>
  <br>
  <br>
</div>
</body>

<?php require('C:\xampp\htdocs\zazah\resources\templates\footer.php');
 ?>
