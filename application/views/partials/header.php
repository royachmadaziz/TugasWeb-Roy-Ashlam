<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Code-book :)</title>
        <link rel="stylesheet" href="<?php echo base_url('semantic/dist/semantic.min.css') ?>">
        <link rel="icon" href="<?php echo base_url('/assets/img/book.png'); ?> ">
    </head>
    <body>
        <div class="ui grey top fixed menu">
            <div class="ui container">
                <a class="item" href="<?= base_url() ?>">
                   <img src="assets/img/book1.png" alt="">
                </a>
                <div class="right item">
                    <div class="ui buttons">
                        <a href="<?php echo base_url() ?>login" class="ui button blue">Login</a>
                        <div class="or"></div>
                        <a href="<?php echo base_url() ?>register" class="ui green button">Register</a>
                    </div>
                </div>
            </div>
        </div>