@extends('layouts.master-dashboard')

@section('title')
    {{ $user-> name }}
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
                                            <span class="nav-link share-tab"><b>User info</b></span>
                                        </li>
                                    </ul>
                                    <div class="event col-sm-12">
                                        <div class="event-calendar col-sm-4" style="border:none;">
                                            <img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" />
                                        </div>
                                        <div class="event-details col-sm-8">
                                            <div class="details-body">
                                                <ul>
                                                    <li><a href="#">{{$user -> name}}</a>
                                                    <li>Birthday: <?php
                                                                    $date = str_replace('/', '-', $user->birth);
                                                                    echo date('F jS, Y', strtotime($date));
                                                                   ?></li>
                                                    <li>From: {{ $user -> location }}</li>
                                                    <li>Web Developer</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>About me</b></span>
                                        </li>
                                    </ul>
                                    <div class="col-sm-12 details-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tristique malesuada. Vestibulum condimentum, mi at iaculis tincidunt, sapien enim aliquam nibh, ut egestas dui libero vitae purus. Cras laoreet quam elementum, consequat enim a, semper augue. Suspendisse congue sed nunc varius fermentum. Nam quis placerat lectus.
                                            </div>
                                            <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Latest projects</b></span>
                                        </li>
                                    </ul>
                                    <div class="col-sm-12 details-body">
                                        <a href="#">Project IGI</a><br/>
                                        <a href="#">Project F.E.A.R</a><br/>
                                        <a href="#">Project Blitz</a><br/>
                                            </div>
                                            <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Latest ideas</b></span>
                                        </li>
                                    </ul>
                                    <div class="col-sm-12 details-body">
                                        <a href="#">Good idea</a><br/>
                                        <a href="#">Bad idea</a><br/>
                                        <a href="#">Better idea</a><br/>
                                            </div>
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item" style="width: 100%;">
                                            <span style="width: 100%;" class="nav-link share-tab" style="width: 100%;"><b>Friends: 42</b> &nbsp;&nbsp;&nbsp; <a href="#" class="pull-right"> See all</a></span>
                                        </li>
                                    </ul>
                                    <div class="col-xs-12" style="padding: 5px 0;">
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 1</a></div></div>
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 2</a></div></div>
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 3</a></div></div>
                                        <div class="col-xs-12">&nbsp;</div>
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 4</a></div></div>
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 5</a></div></div>
                                        <div class="col-sm-4" style="padding: 0 3px;"><img class="img-responsive" alt="" src="{{ asset('images/user.svg')}}" /><div style="width: 100% !important; text-align: center"><a href="#">Friend 6</a></div></div>
                                    </div>
                                </div>
                                </div>

                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-sm-6">
                            <div class="posts-div">
                                    <div class="card card-default posts-card">
                                        <div class="card-header no-border">
                                            <div class="header-block">
                                                <div class="title post-user">
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">{{$user->name}}</span> <span class="post-action">posted a new video</span></a></div>
                                                    <div class="col-sm-2" style="padding: 0; text-align: right;"><span class="post-time" href="#">6 hours ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <p style="text-align: justify;">If you are interested in web development, watch the tutorial I made yesterday. I hope you learn a lot from it <i class="twa twa-smile"></i> <i class="twa twa-mortar-board"></i></p>
                                            <p>
                                                <iframe class="col-lg-12" height="400" src="https://www.youtube.com/embed/U-JhRjRaD4A" frameborder="0" allowfullscreen></iframe>
                                            </p>
                                        </div>
                                        <div class="card-under-content">
                                            <span class="under-content-likes"><i class="fa fa-thumbs-o-up fa-fw"></i> 21 likes</span>
                                            <span class="under-content-likes pull-right"><i class="fa fa-share-square-o fa-fw"></i> 1 share</span>
                                            <span class="under-content-likes pull-right comments"><i class="fa fa-comments-o fa-fw"></i> 6 comments &nbsp;&nbsp;&nbsp; </span>
                                        </div>
                                        <div class="card-footer"> 
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up fa-fw"></i> Like</button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-comment fa-fw"></i> Comment</button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-share fa-fw"></i> Share</button>
                                            
                                            <button type="button" class="btn btn-secondary pull-right"><i class="fa fa-bars fa-fw"></i> More</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="posts-div">
                                    <div class="card card-default posts-card">
                                        <div class="card-header no-border">
                                            <div class="header-block">
                                                <div class="title post-user">
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">{{$user->name}}</span> <span class="post-action"></span></a></div>
                                                    <div class="col-sm-2" style="padding: 0; text-align: right;"><span class="post-time" href="#">1 hour ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <p style="text-align: justify;">Winter is here! We must gather our forces to fight the Night King. The only war that matters now is the Great War on the north. <i class="twa twa-angry"></i> <i class="twa twa-snowflake"></i></p>
                                        </div>
                                        <div class="card-under-content">
                                            <span class="under-content-likes"><i class="fa fa-thumbs-o-up fa-fw"></i> 31545 likes</span>
                                            <span class="under-content-likes pull-right"><i class="fa fa-share-square-o fa-fw"></i> 5122 shares</span>
                                            <span class="under-content-likes pull-right comments"><i class="fa fa-comments-o fa-fw"></i> 15279 comments &nbsp;&nbsp;&nbsp; </span>
                                        </div>
                                        <div class="card-footer"> 
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up fa-fw"></i> Like</button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-comment fa-fw"></i> Comment</button>
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-share fa-fw"></i> Share</button>
                                            
                                            <button type="button" class="btn btn-secondary pull-right"><i class="fa fa-bars fa-fw"></i> More</button>
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