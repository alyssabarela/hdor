<!-- carousel -->
<div id="membersRigs" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#membersRigs" data-slide-to="0" class="active"></li>
    <li data-target="#membersRigs" data-slide-to="1"></li>
    <li data-target="#membersRigs" data-slide-to="2"></li>
    <!-- <li data-target="#membersRigs" data-slide-to="3"></li>
    <li data-target="#membersRigs" data-slide-to="4"></li>
    <li data-target="#membersRigs" data-slide-to="5"></li>
    <li data-target="#membersRigs" data-slide-to="6"></li>
    <li data-target="#membersRigs" data-slide-to="7"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/1.jpg" alt="">
    </div>
    <div class="item">
      <img src="images/2.jpg" alt="">
      <div class="carousel-caption">
        <h3>Caption for img 2</h3>
        <p>Subcaption for img 2</p>
      </div>
    </div>
    <div class="item">
      <img src="images/3.jpg" alt="">
    </div>
    <!-- <div class="item">
      <img src="images/4.jpg" alt="">
      <div class="carousel-caption">
        <h3>London phone booths</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/5.jpg" alt="">
    </div>
    <div class="item">
      <img src="images/6.jpg" alt="">
      <div class="carousel-caption">
        <h3>Pont Neuf Bridge in Paris</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/7.jpg" alt="">
    </div>
    <div class="item">
      <img src="images/8.jpg" alt="">
      <div class="carousel-caption">
        <h3>Golden Gate Bridge at dusk</h3>
      </div>
    </div> -->
  </div>
  <a class="left carousel-control" href="#membersRigs" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#membersRigs" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<!-- another carousel version with no controls
<script type="text/javascript">
        $(function() {
            // create the image rotator
            setInterval("rotateImages()", 3000);
        });

        function rotateImages() {
            var oCurPhoto = $('#hero div.current');
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#hero div:first');

            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current')
                    .animate({ opacity: 1.0 }, 1000,
                                function() {
                                    oCurPhoto.removeClass('previous');
                                });
        }
    </script>
    
    <div id="hero">
            <div class="current"><img src="img/HomePageImages/Paris.jpg"></div>
            <div><img src="img/HomePageImages/Paris-2.jpg"></div>
            <div><img src="img/HomePageImages/Hong-Kong.jpg"></div>
            <div><img src="img/HomePageImages/Hong-Kong-2.jpg"></div>
            <div><img src="img/HomePageImages/London.jpg"></div>
            <div><img src="img/HomePageImages/London-2.jpg"></div>
            <div><img src="img/HomePageImages/San-Francisco.jpg"></div>
            <div><img src="img/HomePageImages/San-Francisco-2.jpg"></div>
        </div>

-->
<!-- a bootstrap carousel with fade
.carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
  z-index: 2;
}

<div id="Carousel" class="carousel slide carousel-fade col-lg-8 col-offset-2">
        <ol class="carousel-indicators">
            <li data-target="Carousel" data-slide-to="0" class="active"></li>
            <li data-target="Carousel" data-slide-to="1"></li>
            <li data-target="Carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="//placehold.it/1300x500" class="img-responsive">
            </div>
           <div class="item">
             <img src="//placehold.it/1300x500/55EE55" class="img-responsive">
            </div>
           <div class="item">
             <img src="//placehold.it/1300x500/CCFEFE" class="img-responsive">
            </div>
        </div>

        <a class="left carousel-control" href="#Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>
-->