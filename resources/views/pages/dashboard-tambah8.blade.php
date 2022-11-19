@extends('../layout/' . $layout)

@section('subhead')
<title>Maklumat Pribadi Pengundi</title>
@endsection

@section('subcontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .fa {
    padding: 20px;
    font-size: 30px;
    width: 90px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }

  .fa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }

  .fa-pinterest {
    background: #cb2027;
    color: white;
  }

  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }

  .fa-skype {
    background: #00aff0;
    color: white;
  }

  .fa-android {
    background: #a4c639;
    color: white;
  }

  .fa-dribbble {
    background: #ea4c89;
    color: white;
  }

  .fa-vimeo {
    background: #45bbff;
    color: white;
  }

  .fa-tumblr {
    background: #2c4762;
    color: white;
  }

  .fa-vine {
    background: #00b489;
    color: white;
  }

  .fa-foursquare {
    background: #45bbff;
    color: white;
  }

  .fa-stumbleupon {
    background: #eb4924;
    color: white;
  }

  .fa-flickr {
    background: #f40083;
    color: white;
  }

  .fa-yahoo {
    background: #430297;
    color: white;
  }

  .fa-soundcloud {
    background: #ff5500;
    color: white;
  }

  .fa-reddit {
    background: #ff5700;
    color: white;
  }

  .fa-rss {
    background: #ff6600;
    color: white;
  }
</style>




<style>
  .embed-container {
    position: relative;
    padding-bottom: 70.75%;
    height: 0;
    overflow: hidden;
  }

  .embed-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
</style>

<script>
  setTimeout(function() {
    var iframe = document.getElementById('yourIFrameId');
    var url = iframe.src;
    iframe.src = url;
  }, 60 * 1000);
</script>

<!-- <div class="embed-container">
<iframe src="https://app.powerbi.com/view?r=eyJrIjoiM2M1NmMyOTQtOGE1ZS00MjE4LWEwNzUtN2MyZWE4NWFiZjcwIiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D" frameborder="0" allowfullscreen="" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"></iframe>
</div> -->
<div class="embed-container">
  <div id="content">
    <div style="height:580px;width:960px">
      <iframe width="1920" height="1080" src="https://app.powerbi.com/view?r=eyJrIjoiZmRhOTlhNGUtN2NkNy00MjNiLTllYTktNjU1YjQzMmZkNDVhIiwidCI6ImI2NWZhMjNkLWFkNjgtNGM1My05OWIxLWQ1YTQwZjExMDM3OSIsImMiOjEwfQ%3D%3D" frameborder="0" height="100%" width="100%" style="position:absolute; clip:rect(0px,1920px,750px,0px);
            bottom:-0px; allowFullScreen=" true"></iframe>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div style="justify-content:center; display:flex;">
    <h2>Publish to our Social Media</h2>
  </div>
  <div style="justify-content:center; display:flex;">
    <!-- Add font awesome icons -->
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  @endsection