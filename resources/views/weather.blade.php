@extends('layouts.master-dashboard')

@section('title') Weather @endsection

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/twemoji-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gentelella.min.css') }}">
 <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
@endsection

@section('menu')
<li>
    <a href="{{ url('news-feed') }}">
    <i class="fa fa-newspaper-o fa-fw"></i> News Feed
    </a>
    <a href="{{ url('messenger') }}">
    <i class="fa fa-commenting fa-fw"></i> Messenger
    </a>
    <a href="my-projects">
    <i class="fa fa-calendar fa-fw"></i> Events
    </a>
    <a href="my-projects">
    <i class="fa fa-group fa-fw"></i> Groups
    </a>
    <a href="my-projects">
    <i class="fa fa-sticky-note fa-fw"></i> Pages
    </a>
    <a href="my-projects">
    <i class="fa fa-user fa-fw"></i> Friends
    </a>
    <a href="my-projects">
    <i class="fa fa-heart fa-fw"></i> Interests
    </a>
    <a href="my-projects">
    <i class="fa fa-bookmark fa-fw"></i> Recommendations
    </a>
    <a href="{{ url('weather') }}">
    <i class="fa fa-cloud fa-fw"></i> Weather
    </a>
    <a href="{{ url('profile') . '/' . $user->username }}">
    <i class="fa fa-address-card fa-fw"></i> Profile
    </a>
    <a href="my-projects">
    <i class="fa fa-gamepad fa-fw"></i> Games
    </a>
</li>
@endsection

@section('main-content')
<article class="content cards-page posts-page">
                    <section class="section">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="card card-default">
                                    <div class="card-block posts-card">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item">
                                                <span class="nav-link share-tab"><b>Current weather in {{$user->location}}</b></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <?php/*
                                            $url = 'http://api.openweathermap.org/data/2.5/weather?id=3196359&lang=en&units=metric&APPID=b2a1d224e3d5d7f374c3eb75104e3a58';
                                            $contents = file_get_contents($url);
                                            $clima=json_decode($contents);
                                            echo $contents;
                                            */
                                        ?>
                                        <div class="x_panel">
                    
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="weather-text pull-right">
                          <h3 class="degrees">23</h3>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-sm-3">
                                <div class="card card-default">
                                    <div class="card-block posts-card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Advertising</b></span>
                                        </li>
                                        <li class="nav-item pull-right">
                                            <span><i class="fa fa-window-close-o" aria-hidden="true"></i></span>
                                        </li>
                                    </ul>
                                    <div class="col-sm-12">
                                        <p>
                                        <img style="margin-bottom: 15px;" class="img-responsive img-rounded" src="{{ asset('images/ccc.jpg') }}" />  
                                        <a href="#">AWESOME Advertisement Title!</a><br/>
                                        <a style="font-size:12px;" href="#">www.advertisement.com</a><br />
                                        <span style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</span>
                                            </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                        </div>
                    </section>
</article>

<a href="#0" class="cd-top">Top</a>
 @endsection

 @section('custom-js')
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

 @endsection