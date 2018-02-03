
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        {{-- Vendor CSS --}}
        <link rel="stylesheet" href="{{ asset("css/vendor.css") }}">
        {{-- App CSS --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <div class="app blank sidebar-opened">
            <article class="content">
                <div class="error-card global">
                    <div class="error-title-block">
                    <h1 class="error-number">403</h1>
                    <h2>Access denied</h2>
                    <p>Full authentication is required to access this resource. <a href="#">Report this?</a>
                    </p>
                    </div>
                    <div class="error-container">
                        <div class="row">
                            <div class="col-12"><br>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="my-projects">
                            <i class="fa fa-angle-left"></i> Back to Dashboard </a>
                    </div>
                </div>
            </article>
        </div>

        <script src="{{ asset("js/vendor.js") }}"></script>
        <script src="{{ asset("js/app.js") }}"></script>
    </body>