<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> -->
<style type="text/css">
      .jumbotron {
          position: relative;
          background: url(assets/img/BG1.jpg) center center;
          color:#fff;
          width: 100%;
          height: 40%;
          background-size: cover;
          overflow: hidden;
      }

      .piled
      {
        position: right;
        background: center center;
        width: 80%;
        height: relative;
        float: center;
      }

    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="jumbotron">
<!-- <br>
    <br>
    <br>
  <h1 align="center" class="display-4">Selamat Datang</h1>
  <p align="center" class="lead">Di website Review Buku</p>
 <!--  <hr class="my-4"> -->

</div>
<h3 class="ui center aligned header"></h3>
<div class="ui container">
  <div class="ui section divider"></div>
<h3 class="ui center aligned header"></h3>
<div class="ui container">
  <h2 class="ui header">
  Most Popular
</h2>
    <div class="eleven wide column">
      <div class="ui five column grid">
        <?php foreach($book as $key): ?>
        <div class="column">
          <div class="ui card">
            <div class="blurring dimmable image">
              <div class="ui dimmer transition hidden">
                <div class="content">
                  <div class="center">
                    <a href="<?= base_url('books/details') ?>/<?= $key->kd_buku ?>" class="ui inverted button">Read More</a>
                  </div>
                </div>
              </div>
              <?php if ($key->img == 'NULL' || $key->img == ''): ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/img/image.png') ?>">
              <?php else: ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/uploads') ?>/<?= $key->img ?>">
              <?php endif ?>
            </div>
            <div class="content">
              <div class="header"><?= $key->judul ?></div>
              <div class="meta">
                <a class="group"><?= $key->genre ?></a>
              </div>
              
            </div>
           <!--  <div class="content">
              <img class="ui avatar image" src="<?= base_url('assets/uploads') ?>/<?= $key->ava ?>"> <?= $key->penulis ?>
            </div> -->
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>
<div class="ui section divider"></div>
<h3 class="ui center aligned header"></h3>
<div class="ui container">
  <h2 class="ui header">
  All Book
</h2>
    <div class="eleven wide column">
      <div class="ui five column grid">
        <?php foreach($book as $key): ?>
        <div class="column">
          <div class="ui card">
            <div class="blurring dimmable image">
              <div class="ui dimmer transition hidden">
                <div class="content">
                  <div class="center">
                    <a href="<?= base_url('books/details') ?>/<?= $key->kd_buku ?>" class="ui inverted button">Read More</a>
                  </div>
                </div>
              </div>
              <?php if ($key->img == 'NULL' || $key->img == ''): ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/img/image.png') ?>">
              <?php else: ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/uploads') ?>/<?= $key->img ?>">
              <?php endif ?>
            </div>
            <div class="content">
              <div class="header"><?= $key->judul ?></div>
              <div class="meta">
                <a class="group"><?= $key->genre ?></a>
              </div>
              
            </div>
           <!--  <div class="content">
              <img class="ui avatar image" src="<?= base_url('assets/uploads') ?>/<?= $key->ava ?>"> <?= $key->penulis ?>
            </div> -->
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>

 <div class="ui section divider"></div>
<div class="ui two column relaxed grid">
        <div class="column">
 <div class="ui piled right floated segment" name="piled">
  <h2>About Us</h2>
  <h4>codebook is a library-based website that can be accessed by everyone anytime and anywhere with so codebook makes it easy for anyone to read the book at any time. codebook focuses the book for the field of information technology. This website is suitable for you who are in the field of technology. The codebook will give users the ease of reading with the easy-to-use download feature.</h4> 
</div>
</div>

<div class="ui vertical divider"></div>

<div class="column">
<div class="ui piled left floated segment" name="piled">
  <h2>Contact Us</h2>
  <div class="column">
    <div class="ui labeled vertical fluid icon menu">
      <a class="item">
        <i class="mail icon"></i>
          Codebooksupport@gmail.com
      </a>
      <a class="item">
        <i class="mobile icon"></i>
        0812345678910
      </a>
    </div>
  </div>
</div>
</div>
</div>
<div class="ui horizontal divider">
  End
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<?php $this->load->view('partials/footer') ?>