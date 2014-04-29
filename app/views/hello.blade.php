@extends('base')

@section('container')

  <div class="title text-center">
    <img src="{{ asset('assets/img/header.png') }}" />
  </div>

  <div class="about text-center">
    <div class="container">
      <h1><strong>I design</strong> experiences, websites, mobile apps, brands and social media campaigns.</h1>
      <br />
      <h4>[ I am also a movie fanatic, kickboxer, longboarder, bballer, pool shark,
  Wolverine, New Yorker, dj and photograher on the side ]</h4>
    </div>
  </div>

  <div class="social text-center">
    <i class="fa fa-linkedin"></i>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-tumblr"></i>
  </div>

  <hr />

  <div class="section">
    <div class="info">
      <div class="container">
        <h4>Client</h4>
        <h3>Unlockable</h3>
        <ul>
          <li>Designed UX + visuals for their corporate website</li>
          <li>Photographed images on site</li>
          <li>Shot the cinematography for online commercial</li>
        </ul>
      </div>
    </div>
    <div class="container">
      <img src="{{ asset('assets/img/unlockable.png') }}" class="img-responsive" />
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <div class="pull-left">
        &copy; liz jamora 2014
      </div>
      <div class="pull-right">
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-tumblr"></i>
      </div>
    </div>
  </div>

@stop
