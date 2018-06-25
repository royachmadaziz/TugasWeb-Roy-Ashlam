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
<br>
<div class="ui middle">

	<div class="ui container">
		
		<div class="ui three column stackable grid">
			<div class="column">
			</div>		
			<div class="column">
				<h1 align="center">Login</h1>
		<?php 
			$attr = array('class' => 'ui form');
      		echo form_open('auth/login',$attr);  
		?>
		<?php echo validation_errors(); ?>
			<div class="field">
				<label>Username</label>
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="field">
				<label>Password</label>
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="field">
				<input type="submit" class="ui button primary">
				<input type="reset" class="ui button red">
			</div>
		<?php echo form_close() ?>		
			</div>

		</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>
