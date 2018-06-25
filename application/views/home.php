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
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<?php $this->load->view('partials/footer') ?>