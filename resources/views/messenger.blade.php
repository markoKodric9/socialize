@extends('layouts.master-dashboard')

@section('title') Messenger @endsection

@section('custom-css')
        <link rel="stylesheet" href="{{ asset('css/twemoji-awesome.css') }}">
 <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

<script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.3.0"></script>
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
    <a href="my-projects">
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
                            <div class="col-sm-3">
                            <div class="card card-default">
                                    <div class="card-block posts-card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Messenger</b></span>
                                        </li>
                                    </ul>
                                    <div class="col-sm-1 new-message">
                                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i></a>
                                    </div>
                                    <div class="col-sm-10 messenger-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 settings">
                                        <a href="#"><i class="fa fa-cog fa-fw"></i></a>
                                    </div>
                                    </div>
                            </div>
                            <div class="card card-default">
                                    <div class="card-block posts-card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Friends list</b></span>
                                        </li>
                                    </ul>
                                    <ul class="friend-list">
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Janja Hlastan</span><span class="pull-right status-online"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Kristijan Šuler</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Orpha Cropper</span><span class="pull-right status-online"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Royal Ellsworth</span><span class="pull-right status-online"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Garrick Rhodes</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Regena William</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Odin Ashley</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Mack Tipton</span><span class="pull-right status-online"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Renee Hawkins</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Wilton Poole</span><span class="pull-right status-online"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                        <li class="friend">
                                            <a class="friend-link"><img src="{{ asset('images/user.svg') }}" width="32" height="32" alt="" class="img-responsive friend-img"> <span class="friend-name">Shanna Fairburn</span><span class="pull-right status-offline"><i class="fa fa-circle"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-sm-6">
                                <div class="card card-default col-sm-6 chat-card">
                                    <div class="card-block posts-card">
                                        <div class="chat-head">
                                            <span class="chat-name">Janja Hlastan</span>
                                            <span class="pull-right chat-close"><i class="fa fa-times"></i></span>
                                            <span class="pull-right chat-settings"><i class="fa fa-cog"></i></span>
                                        </div>

                                        <div class="chat-body">

                                        </div>

                                        <div class="chat-input">
                                            <input type="text" class="form-control" placeholder="Type message...">
                                        </div>

                                        <div class="chat-footer">
                                            <i class="fa fa-picture-o"></i>
                                            <i class="fa fa-caret-square-o-right"></i>
                                            <i class="fa fa-cloud-upload"></i>
                                            <a href="#" class="send-button">Send</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default col-sm-6 chat-card">
                                    <div class="card-block posts-card">
                                        <div class="chat-head">
                                            <span class="chat-name">Kristijan Šuler</span>
                                            <span class="pull-right chat-close"><i class="fa fa-times"></i></span>
                                            <span class="pull-right chat-settings"><i class="fa fa-cog"></i></span>
                                        </div>

                                        <div class="chat-body">

                                        </div>

                                        <div class="chat-input">
                                            <input type="text" class="form-control" placeholder="Type message...">
                                        </div>

                                        <div class="chat-footer">
                                            <i class="fa fa-picture-o"></i>
                                            <i class="fa fa-caret-square-o-right"></i>
                                            <i class="fa fa-cloud-upload"></i>
                                            <a href="#" class="send-button pull-right">Send <i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default col-sm-6 chat-card">
                                    <div class="card-block posts-card">
                                        <div class="chat-head">
                                            <span class="chat-name">Garrick Rhodes</span>
                                            <span class="pull-right chat-close"><i class="fa fa-times"></i></span>
                                            <span class="pull-right chat-settings"><i class="fa fa-cog"></i></span>
                                        </div>

                                        <div class="chat-body">

                                        </div>

                                        <div class="chat-input">
                                            <input type="text" class="form-control" placeholder="Type message...">
                                        </div>

                                        <div class="chat-footer">
                                            <i class="fa fa-picture-o"></i>
                                            <i class="fa fa-caret-square-o-right"></i>
                                            <i class="fa fa-cloud-upload"></i>
                                            <a href="#" class="send-button pull-right">Send <i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i></a>
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