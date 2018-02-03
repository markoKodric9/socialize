<?php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
?>

<div id="particles-js"></div>

<section id="home">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeIn left-side" data-wow-delay="0.3s">
          <h1 class="text-upper"><strong>Connecting IDEAS around the world</strong></h1>
          <div class="desc col-md-12">
              <div class="col-md-8">
            <div class="wow fadeInDown" data-wow-delay="0.2s"><b>Explore</b> through creations/ideas of the community.</div>
              <div class="wow fadeInDown" data-wow-delay="0.6s"><b>Implement</b> your own ideas.</div>
              <div class="wow fadeInDown" data-wow-delay="1.0s"><b>Generate</b> or <b>write</b> code.</div>
              <div class="wow fadeInDown" data-wow-delay="1.4s"><b>Share</b> your creation/ideas with other people.</div>
              <div class="wow fadeInDown" data-wow-delay="1.8s"><b>Grow</b> with the community.</div>
              </div>
<div class="col-md-4 text-right">
          <button type="button" class="btn">Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
          <!--<img class="img-responsive pull-right anim-img" alt="" src="{{ asset('images/connect.png') }}" />--></div>
</div> <!--
<div class="img-desc col-md-4">
              <img class="img-responsive pull-right anim-img" alt="" src="{{ asset('images/connect.png') }}" />
            </div>-->
          <div class="col-md-4 wow zoomIn home-img" data-wow-delay="2.2s">
              <p>Think, think, think &nbsp; <i class="fa fa-angle-right"></i></p>
              <img class="img-responsive" id="idea" alt="" src="{{ asset('images/brainstorming.png') }}" />
            </div>
          <div class="col-md-4 wow zoomIn home-img" data-wow-delay="2.6s">
              <p>Get your hands dirty &nbsp; <i class="fa fa-angle-right"></i></p>
              <img class="img-responsive" id="pg" alt="" src="{{ asset('images/programming.png') }}" /></div>
          <div class="col-md-4 wow zoomIn home-img" data-wow-delay="3.0s">
          <p>From zero to hero =)</p>
          <img class="img-responsive" id="win" alt="" src="{{ asset('images/winner.png') }}" />
          </div><!--
<div class="col-xs-12">
          <button type="button" class="btn">Learn more <i class="fa fa-angle-double-right" aria-hidden="true"></i></button></div>-->
        </div>
        <div class="col-md-6 wow fadeIn right-side" data-wow-delay="0.3s">
          <h1 class="text-upper">Create an account, it's free!</h1>
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" aria-hidden="true"></i></i></span>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>

            <div class="input-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" aria-hidden="true"></i></i></span>
              <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Choose username" required>
              @if ($errors->has('username'))
                  <span class="help-block">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div>

            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-at fa-fw " aria-hidden="true"></i></i></span>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock  fa-fw" aria-hidden="true"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock  fa-fw" aria-hidden="true"></i></span>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
            </div>

            <div class="input-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar-minus-o fa-fw" aria-hidden="true"></i></span>
                <input id="birth" type="text" class="form-control" placeholder="Date of birth   (dd/mm/yyyy)" name="birth" required>
                @if ($errors->has('birth'))
                  <span class="help-block">
                      <strong>{{ $errors->first('birth') }}</strong>
                  </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i></span>
                <select name="location" class="form-control">
                    <?php
                    foreach($countries as $country) {
                        echo "<option value=" . $country . ">" . $country . "</option>";
                    }
                    ?>
                </select>
            </div>
                <br />

            <p>
                <label class="radio-inline"><input type="radio" name="gender" value="1" checked>Male</label>
                <label class="radio-inline"><input type="radio" name="gender" value="0">Female</label>
            </p>

            <div class="form-group agree col-md-12">
                
                <br />
              By clicking Register, I agree to the <b>Terms of Service</b> and <b>Privacy Policy</b>.<br />
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary">
                        Register <i class="fa fa-check" aria-hidden="true"></i></i>
                    </button>
                </div>
            </div>
                    <div class="form-group">
                        
              <a href="login">Already have an account?</a>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>