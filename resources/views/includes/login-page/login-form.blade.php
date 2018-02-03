<div class="content col-xs-12">
    <section id="home">
        <div class="overlay">
            <div class="container">
                <div class="row login-row wow zoomIn">
                    <div class="login-icon"><i class="fa fa-users fa-5x"></i></div>
                    <h1 class="login-header">Sign in</h1>
                    <div class="login-form-div col-xs-12">
                        <form action="login" class="login-form" method="post">
                            {{ csrf_field() }}
                            <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" aria-hidden="true"></i></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email address..." aria-describedby="basic-addon1" required autofocus>
                            </div>
                            <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password..." aria-describedby="basic-addon1" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in &nbsp;<i class="fa fa-sign-in"></i></button>
                        </form>
                    </div>

                    
                </div>
                <div class="row no-acc-row">
                    <div class="no-acc-div col-xs-12">
                        <span class="no-acc-span">Don't have an account?</span><br />
                        <a href="signup" class="no-acc-link">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>