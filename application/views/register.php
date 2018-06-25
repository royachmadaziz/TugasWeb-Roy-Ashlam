<?php $this->load->view('partials/header') ?>
<style type="text/css">
      .body {
          position: relative;
          background: url(assets/img/bb.jpg) center center;
          color:#fff;
          width: 100%;
          height: 100%;
          background-size: cover;
          overflow: hidden;
      }
    </style>
<div class="body">
<br>
<br>
<br>
<br>
<br>

<div class="ui middle">
  <div class="ui container">
    <div class="ui three column stackable grid">
      <div class="column"></div>
      <div class="column">
        <h1 align="center">Register</h1>
          <?php
          $attr = array('class' => 'ui form');
          echo form_open('Auth/register',$attr);
          ?>
          <div class="field">
            <label>Fullname</label>
            <input type="text" name="fullname" placeholder="Fullname">
          </div>
          <div class="field">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email">
          </div>
          <div class="field">
            <label>Gender</label>
            <div class="field">
              <select name="gender" class="ui fluid search dropdown">
                <option value="0">-- Choose --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
          </div>
          <div class="field">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username">
          </div>
          <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="field">
            <label>Choose Role</label>
            <select name="role" class="ui fluid search dropdown">
              <option value="0">-- Choose --</option>
              <option value="writer">Writer</option>
              <option value="user">User</option>
            </select>
          </div>
          <button class="ui button primary" type="submit">Submit</button>
          <div class="ui pink message"><?php echo validation_errors(); ?></div>
          <br>
            <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>  
</div>
<?php $this->load->view('partials/footer') ?>