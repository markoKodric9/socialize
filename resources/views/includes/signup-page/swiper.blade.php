<?php
    $email = $_POST['email'];
    $pass = $_POST['password']
?>

<div class="content col-xs-12">
    <section id="home">
        <div class="overlay">
            <div class="container">
            <!-- Swiper -->
                <form action="register" method="post">
                    {{ csrf_field() }}
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-sm-8">
                                    <h1>STEP 1: <span class="h1-desc">Personal information</span></h1>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-at fa-fw" aria-hidden="true"></i></span>
                                        <input id="email" type="email" name="email" class="form-control" value="<?=$email?>" placeholder="E-mail address *" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
                                        <input id="email" type="password" name="password" class="form-control"value="<?=$pass?>" placeholder="Password *" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                                        <input id="email" type="text" name="name" class="form-control" placeholder="Full name *" aria-describedby="basic-addon1" required autofocus>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building-o fa-fw" aria-hidden="true"></i></span>
                                        <input id="email" type="text" name="company" class="form-control" placeholder="Company" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i></span>
                                        <input id="email" type="text" name="address" class="form-control" placeholder="Address *" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone fa-fw" aria-hidden="true"></i></span>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone number *" aria-describedby="basic-addon1" required>
                                    </div>
                                    <p><br />* - Required fields</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-sm-8">
                                    <h1 class="second-h1">STEP 2: <span class="h1-desc">Choose plan</span></h1>
                                    <!--
                                    <div class="acc-selection">
                                        <input type="radio" id="control_01" name="select" value="1" checked>
                                        <label for="control_01">
                                            <h2>Basic - $0.00 / month </h2>
                                        </label>
                                        <div class="signup-features 1">
                                            <ul>
                                                <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Up to 3 projects</b></li>
                                                <li><i class="fa fa-th fa-fw"></i>&nbsp; Grid system only</li>
                                                <li><i class="fa fa-sliders fa-fw"></i>&nbsp; 1 preset</li>
                                                <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="acc-selection">
                                        <input type="radio" id="control_02" name="select" value="2">
                                        <label for="control_02">
                                            <h2>Standard - $9.99 / month</h2>
                                        </label>
                                        <div class="signup-features 2" style="display: none;">
                                            <ul>
                                                <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Up to 10 projects</b></li>
                                                <li><i class="fa fa-th fa-fw"></i>&nbsp; <b>Grid, Bootstrap system</b></li>
                                                <li><i class="fa fa-sliders fa-fw"></i>&nbsp; 5 presets</li>
                                                <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="acc-selection">
                                        <input type="radio" id="control_03" name="select" value="3">
                                        <label for="control_03">
                                            <h2>Ultimate - $24.99 / month</h2>
                                        </label>
                                        <div class="signup-features 3" style="display: none;">
                                            <ul>
                                                <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Unlimited projects</b></li>
                                                <li><i class="fa fa-th fa-fw"></i>&nbsp; <b>Grid, Bootstrap system</b></li>
                                                <li><i class="fa fa-sliders fa-fw"></i>&nbsp; <b>15 presets</b></li>
                                                <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                            </ul>
                                        </div>
                                    </div>-->
                                    @foreach ($plans as $plan)
                                        <div class="acc-selection">
                                            <input type="radio" id="{{ $plan->name }}" name="select" value="{{ $plan->name }}" 
                                                @if ($plan->name === "Basic") checked @endif>
                                            <label for="{{ $plan->name }}">
                                                <h2>{{ $plan->name }} - ${{ number_format($plan->cost, 2) }} monthly</h2>
                                            </label>
                                            <div class="signup-features {{ $plan->name }}" @if ($plan->name === "Standard" || $plan->name === "Ultimate") style="display:none;" @endif>
                                                @if ($plan->name === "Basic")
                                                    <ul>
                                                        <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Up to 3 projects</b></li>
                                                        <li><i class="fa fa-th fa-fw"></i>&nbsp; Grid system only</li>
                                                        <li><i class="fa fa-sliders fa-fw"></i>&nbsp; 1 preset</li>
                                                        <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                                    </ul>
                                                @elseif ($plan->name === "Standard")
                                                    <ul>
                                                        <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Up to 10 projects</b></li>
                                                        <li><i class="fa fa-th fa-fw"></i>&nbsp; <b>Grid, Bootstrap system</b></li>
                                                        <li><i class="fa fa-sliders fa-fw"></i>&nbsp; 5 presets</li>
                                                        <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                                    </ul>
                                                @else
                                                    <ul>
                                                        <li><i class="fa fa-folder-open-o fa-fw"></i>&nbsp; <b>Unlimited projects</b></li>
                                                        <li><i class="fa fa-th fa-fw"></i>&nbsp; <b>Grid, Bootstrap system</b></li>
                                                        <li><i class="fa fa-sliders fa-fw"></i>&nbsp; <b>15 presets</b></li>
                                                        <li><i class="fa fa-cogs fa-fw"></i>&nbsp; Lifetime Support</li>
                                                    </ul>
                                                @endif
                                                    <!--
                                                    @if ($plan->description)
                                                        {{ $plan->description }}
                                                    @endif-->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-sm-12">
                                    <h1>STEP 3: <span class="h1-desc">Overview</span></h1>
                                    <div class="col-sm-6">
                                        <ul class="overview-ul">
                                            <li id="o-email">Email: </li>
                                            <li id="o-pass">Password: </li>
                                            <li id="o-name">Name: </li>
                                            <li id="o-company">Company: </li>
                                            <li id="o-address">Address: </li>
                                            <li id="o-phone">Phone: </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="overview-ul">
                                            <li id="o-plan">Plan: </li>
                                            <li id="o-price">Price: </li>
                                            <li id="o-includes">Inludes: </li>
                                        </ul>
                                        <button type="submit" class="btn">Sign up &nbsp;<i class="fa fa-thumbs-up"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next" onclick="updateForm()"></div>
                    <div class="swiper-button-prev"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- end home -->
</div>

<script>
    function updateForm() {

    }
</script>