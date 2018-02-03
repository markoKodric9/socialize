@extends('layouts.master-dashboard')

@section('title') News feed @endsection

@section('custom-css')
        <link rel="stylesheet" href="{{ asset('css/twemoji-awesome.css') }}">
 <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/randomColor.js') }}"></script>
<script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.3.0"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>
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
                                            <span class="nav-link share-tab"><b>Upcoming events</b></span>
                                        </li>
                                    </ul>
                                    <div class="event col-sm-12">
                                        <div class="event-calendar col-sm-4">
                                            <div class="calendar-head">SEP, 2017</div>
                                            <div class="calendar-body">28th</div>
                                            <div class="calendar-footer">at 9:00</div>
                                        </div>
                                        <div class="event-details col-sm-8">
                                            <div class="details-body">
                                                <ul>
                                                    <li><a href="#">Team building <i class="twa twa-runner"></i> <i class="twa twa-muscle"></i></a></li>
                                                    <li>Solkan adrenaline park, Solkan</li>
                                                    <li><a href="#">15 friends are going</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event col-sm-12">
                                        <div class="event-calendar col-sm-4">
                                            <div class="calendar-head">OCT, 2017</div>
                                            <div class="calendar-body">31st</div>
                                            <div class="calendar-footer">at 20:00</div>
                                        </div>
                                        <div class="event-details col-sm-8">
                                            <div class="details-body">
                                                <ul>
                                                    <li><a href="#">Halloween party <i class="twa twa-jack-o-lantern"></i> <i class="twa twa-ghost"></i></a></li>
                                                    <li>Cirkus night club, Ljubljana</li>
                                                    <li><a href="#">142 friends are going</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            </div>
                                <div class="card card-default">
                                    <div class="card-block posts-card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>My interests</b></span>
                                        </li>
                                    </ul>
                                    <div class="interests col-sm-12">
                                        <a href="#" class="interest">HTML5</a>
                                        <a href="#" class="interest">CSS3</a>
                                        <a href="#" class="interest">Javascript</a>
                                        <a href="#" class="interest">UX</a>
                                        <a href="#" class="interest">Parallax</a>
                                        <a href="#" class="interest">PHP Development</a>
                                    </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-block posts-card">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item">
                                                <span class="nav-link share-tab"><b>My groups</b></span>
                                            </li>
                                        </ul>
                                        <div class="groups col-sm-12">
                                            <ul>
                                                <li class="group"><img src="{{ asset('images/icon1.png')}}" width="24" height="24"> <a href="#">Game of Thrones</a> <span class="pull-right">20+</span></li>
                                                <li class="group"><img src="{{ asset('images/icon2.png')}}" width="24" height="24"> <a href="#">FRI 2017</a> <span class="pull-right">3</span></li>
                                                <li class="group"><img src="{{ asset('images/icon3.png')}}" width="24" height="24"> <a href="#">Web Developers SLO</a> <span class="pull-right"></span></li>
                                                <li class="group"><img src="{{ asset('images/icon4.png')}}" width="24" height="24"> <a href="#">Volkswagen Lovers</a> <span class="pull-right">11</span></li>
                                                <li class="group"><img src="{{ asset('images/icon5.png')}}" width="24" height="24"> <a href="#">Nintendo games</a> <span class="pull-right">18</span></li>
                                                <li class="group"><img src="{{ asset('images/icon6.png')}}" width="24" height="24"> <a href="#">NASA Technologies</a> <span class="pull-right">20+</span></li>
                                                <li class="group"><img src="{{ asset('images/icon7.png')}}" width="24" height="24"> <a href="#">RGB Community</a> <span class="pull-right">5</span></li>
                                                <li class="group"><img src="{{ asset('images/icon8.png')}}" width="24" height="24"> <a href="#">LoL Obsession</a> <span class="pull-right">20+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-block posts-card">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item">
                                                <span class="nav-link share-tab"><b>Explore</b></span>
                                            </li>
                                        </ul>
                                        <div class="explore col-sm-12">
                                            <a href="#" class="interest">Ruby on Rails</a>
                                            <a href="#" class="interest">Python</a>
                                            <a href="#" class="interest">WebAssembly</a>
                                            <a href="#" class="interest">Django</a>
                                            <a href="#" class="interest">React</a>
                                            <a href="#" class="interest">AngularJS</a>
                                            <a href="#" class="interest">VueJS</a>
                                            <a href="#" class="interest">Meteor</a>
                                            <a href="#" class="interest">Ember</a>
                                            <a href="#" class="interest">Popular</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-sm-6">
                                <div class="card card-default posts-card">
                                    <div class="card-block">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <span class="nav-link share-tab"><b>Share</b></span>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#home" class="nav-link active" data-target="#home" data-toggle="tab" aria-controls="home" role="tab"><i class="fa fa-comment-o fa-fw" aria-hidden="true"></i> Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile" class="nav-link" data-target="#profile" aria-controls="profile" data-toggle="tab" role="tab"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i> Photo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" data-target="#messages" aria-controls="messages" data-toggle="tab" role="tab"><i class="fa fa-youtube-play fa-fw" aria-hidden="true"></i> Video</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" data-target="#messages" aria-controls="messages" data-toggle="tab" role="tab"><i class="fa fa-code fa-fw" aria-hidden="true"></i> Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" data-target="#settings" aria-controls="settings" data-toggle="tab" role="tab"><i class="fa fa-calendar-plus-o fa-fw" aria-hidden="true"></i> Event</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs-bordered">
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="card card-default share-card">
                                                <div class="card-block">
                                                    <div class="col-sm-1" style="padding: 0;"><img src="{{ asset('images/user.svg')}}" width="32" height="32"></img></div>
                                                    <div class="col-sm-11" style="padding: 0;"><textarea name="status" id="status" rows="2" placeholder="What's on your mind, {{ Auth::user()->name }} ?"></textarea></div>
                                                </div>
                                                <div class="card-footer"> 
                                                <button class="btn  btn-md rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe fa-fw"></i> Public</button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-globe fa-fw"></i> Public<div class="visibility-desc">Anyone can see this post</div></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i> Friends<div class="visibility-desc">Only your friends can see this</div></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-users fa-fw"></i> Group<div class="visibility-desc">Only selected group can see this</div></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-lock fa-fw"></i> Only me<div class="visibility-desc">Only you can see this</div></a>
                                                    </div> 
                                                    <button class="btn btn-primary btn-md pull-right">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <h4>Profile Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="messages">
                                            <h4>Messages Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <h4>Settings Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="show-posts">
                                    <span class="pull-left">Showing all posts</span>
                                    <a class="pull-left" href="#">Refresh</a>
                                    <a href="#">All posts</a>
                                    <a href="#">Friends posts</a>
                                </div>

                                <div class="posts-div">
                                    <div class="card card-default posts-card">
                                        <div class="card-header no-border">
                                            <div class="header-block">
                                                <div class="title post-user">
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">Daenerys Targaryen</span> <span class="post-action">shared a new project: <a href="#" class="post-action-name">Horsepower</a></span></a></div>
                                                    <div class="col-sm-2" style="padding: 0; text-align: right;"><span class="post-time" href="#">45 minutes ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <p style="text-align: justify;">No doubt you have heard Los Angeles described as a place with a distinct motorbike culture. Part of the joy of living in Southern California is owning a motorcycle. That`s why we have devoted our work to make it possible for you. <i class="twa twa-smile"></i><br /><br />Check it out: <a href="../../public/posts/897asdQL98x">https://www.simplify.com/public/posts/897asdQL98x</a></p>
                                            <p>
                                                <img class="col-lg-6 content-img fancybox" src="{{ asset('images/img1.png') }}" data-big="{{ asset('images/img1.png') }}"/>

                                                <img class="col-lg-6 content-img fancybox" src="{{ asset('images/img2.png') }}" data-big="{{ asset('images/img2.png') }}"/>
                                            </p>
                                        </div>
                                        <div class="card-under-content">
                                            <span class="under-content-likes"><i class="fa fa-thumbs-o-up fa-fw"></i> 1642 likes</span>
                                            <span class="under-content-likes pull-right"><i class="fa fa-share-square-o fa-fw"></i> 9 shares</span>
                                            <span class="under-content-likes pull-right comments"><i class="fa fa-comments-o fa-fw"></i> 96 comments &nbsp;&nbsp;&nbsp; </span>
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
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">Jon Snow</span> <span class="post-action"></span></a></div>
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

                                <div class="posts-div">
                                    <div class="card card-default posts-card">
                                        <div class="card-header no-border">
                                            <div class="header-block">
                                                <div class="title post-user">
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">Tyrion Lannister</span> <span class="post-action">posted a new photo</span></a></div>
                                                    <div class="col-sm-2" style="padding: 0; text-align: right;"><span class="post-time" href="#">2 hours ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <p style="text-align: justify;">Check out my new website template I designed. Share your thoughts in the comments below and please share. <i class="twa twa-smile"></i> <i class="twa twa-fist"></i></p>
                                            <p class="img-p col-lg-12">
                                                <img class="content-img fancybox" src="{{ asset('images/ddd.jpg') }}" data-big="{{ asset('images/ddd.jpg') }}"/>
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
                                                    <div class="col-sm-10" style="padding: 0;"><a class="user-link" href="#"><img class="post-user-img" src="{{ asset('images/user.svg')}}" width="32" height="32"></img> <span class="name">John Doe</span> <span class="post-action">posted a new video</span></a></div>
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
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
 <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = false;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>

<script>
    var el = $('.interest').toArray();
    console.log(el[0]);
    for(var j = 0; j < el.length; j++){
        var color = randomColor({
            luminosity: 'light',
            hue: 'blue'
        });
        $(el[j]).css('background-color', color);
    }
</script>
 @endsection