<!DOCTYPE html>
<div class="container">
  <!-- Static navbar -->
  <nav class="navbar mbr-navbar__section navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav menuRight">
          <li data-menuanchor="gioi_thieu"><a href="#gioi_thieu">Giới Thiệu</a></li>
          <li data-menuanchor="phap_ly"><a href="#phap_ly">Pháp Lý</a></li>
		      <li data-menuanchor="tien_ich_noi_khu"><a href="#tien_ich_noi_khu">Tiện Ích Nội Khu</a></li>
          <li data-menuanchor="thuc_te_du_an"><a href="#thuc_te_du_an">Thực Tế Dự Án</a></li>
          <li data-menuanchor="lien_he"><a href="#lien_he">Liên Hệ</a></li>          
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</div> <!-- /container -->
  <!-- Static navbar -->

  <div id="fullpage">
    <div class="section" id="section0">
      @include('slider.sliderMain')
      @include('canho.page_gioi_thieu')
    </div>
    <div class="section" id="section3">
      <div class="intro">
        <h1>Thực Tế Dự Án</h1>
        <p>And it will animate down to the first section</p>
      </div>
    </div>
    <div class="section" id="section1">
      <div class="intro">
        <h1>Thực Tế Dự Án</h1>
        <p>And it will animate down to the first section</p>
      </div>
    </div>
    <div class="section" id="section2">
      <div class="intro">
        @include('canho.page_phap_ly')
      </div>
    </div>
    <div class="section" id="section4">
      <div class="intro">
        <h1>Liên Hệ</h1>
        <p>And it will animate down to the first section</p>
      </div>
    </div>
  </div>