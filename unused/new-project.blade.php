@extends('layouts.master-dashboard')

@section('title') Dashboard - New project @endsection

@section('menu')
<li class="active open">
              <a href="">
                <i class="fa fa-th-large fa-fw"></i> Projects
                <i class="fa arrow"></i>
              </a>
              <ul>
                <li class="active">
                  <a href="new-project">
                    <i class="fa fa-plus-circle fa-fw"></i> New project
                  </a>
                </li>
                <li>
                  <a href="items-list.html">
                    <i class="fa fa-folder fa-fw"></i> Import project
                  </a>
                </li>
                <li>
                  <a href="my-projects">
                    <i class="fa fa-list fa-fw"></i> Projects list
                  </a>
                </li>
                <li>
                  <a href="my-projects">
                    <i class="fa fa-floppy-o fa-fw"></i> Drafts
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="">
                <i class="fa fa-connectdevelop fa-fw"></i> Community
                <i class="fa arrow"></i>
              </a>
              <ul>
                <li>
                  <a href="posts">
                    <i class="fa fa-newspaper-o fa-fw"></i> Posts
                  </a>
                </li>
                <li>
                  <a href="charts-morris.html">
                    <i class="fa fa-list fa-fw"></i> Timeline
                  </a>
                </li>
                <li>
                  <a href="charts-morris.html">
                    <i class="fa fa-user fa-fw"></i> Friends
                  </a>
                </li>
                <li>
                  <a href="charts-morris.html">
                    <i class="fa fa-comments fa-fw"></i> Forum
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a href="charts-flot.html">
                <i class="fa fa-bar-chart fa-fw"></i> Statistics
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-info-circle fa-fw"></i> Documentation
                <i class="fa arrow"></i>
              </a>
              <ul>
                <li> <a href="charts-flot.html"> Docs 1</a> </li>
                <li> <a href="charts-morris.html">Docs 2</a> </li>
                <li> <a href="charts-morris.html">Docs 3</a> </li>
              </ul>
            </li>
            <li>
              <a href="">
                <i class="fa fa-comment fa-fw"></i> Quick guide
                <i class="fa arrow"></i>
              </a>
              <ul>
                <li> <a href="charts-flot.html"> Guide 1</a> </li>
                <li> <a href="charts-morris.html"> Guide 2</a> </li>
                <li> <a href="charts-morris.html"> Guide 3</a> </li>
              </ul>
            </li>
@endsection

@section('main-content')

<?php
function getToken($length){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

for ($i=0; $i < $length; $i++) {
    $token .= $codeAlphabet[random_int(0, $max-1)];
}

return $token;
}
?>

<article class="content item-editor-page">
    <div class="title-search-block">
        <div class="title-block">
            <h3 class="title"> <span class="title-text">Create new project</span>
                <span class="title-description project-file"> File: HelloWorld.proj </span>
                <span class="title-description"> Size: 34 KB </span>
                <span class="title-description"> ID: <?= getToken(32) ?> </span>
                <span class="title-description"> Visibility: Private (only you can see this project) </span>
                <span class="title-description"> Group: None </span>
                <span class="sparkline bar" data-type="bar"></span>
            </h3>
            
            <div class="under-title">
                <a href="new-project" class="btn btn-primary btn-sm rounded-s"> Save as draft</a>
            </div>
        </div>
    </div>
                    <form name="item" class="col-sm-8">
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label "> Project name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed project-name" value="Hello World" autofocus> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label "> Description: </label>
                                <div class="col-sm-10">
                                    <div class="wyswyg">
                                        <div class="toolbar">
                                            <span class="ql-format-group">
                                                <select title="Size" class="ql-size">
                                                    <option value="10px">Small</option>
                                                    <option value="13px" selected>Normal</option>
                                                    <option value="18px">Large</option>
                                                    <option value="32px">Huge</option>
                                                </select>
                                            </span>
                                            <span class="ql-format-group">
                                                <span title="Bold" class="ql-format-button ql-bold"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Italic" class="ql-format-button ql-italic"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Underline" class="ql-format-button ql-underline"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Strikethrough" class="ql-format-button ql-strike"></span>
                                            </span>
                                            <span class="ql-format-group">
                                                <select title="Text Color" class="ql-color">
                                                    <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected></option>
                                                    <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                    <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                    <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                    <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                    <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                    <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                    <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
                                                    <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                    <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                    <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                    <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                    <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                    <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                    <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                    <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                    <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                    <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                    <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                    <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                    <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                    <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                    <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                    <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                    <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                    <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                    <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                    <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                    <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                    <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                    <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                    <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                    <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                    <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                    <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                </select>
                                                <span class="ql-format-separator"></span>
                                                <select title="Background Color" class="ql-background">
                                                    <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
                                                    <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                    <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                    <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                    <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                    <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                    <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                    <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected></option>
                                                    <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                    <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                    <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                    <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                    <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                    <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                    <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                    <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                    <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                    <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                    <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                    <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                    <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                    <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                    <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                    <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                    <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                    <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                    <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                    <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                    <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                    <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                    <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                    <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                    <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                    <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                    <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                </select>
                                            </span>
                                            <span class="ql-format-group">
                                                <span title="List" class="ql-format-button ql-list"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Bullet" class="ql-format-button ql-bullet"></span>
                                                <span class="ql-format-separator"></span>
                                                <select title="Text Alignment" class="ql-align">
                                                    <option value="left" label="Left" selected></option>
                                                    <option value="center" label="Center"></option>
                                                    <option value="right" label="Right"></option>
                                                    <option value="justify" label="Justify"></option>
                                                </select>
                                            </span>
                                            <span class="ql-format-group">
                                                <span title="Link" class="ql-format-button ql-link"></span>
                                                <span class="ql-format-separator"></span>
                                                <button type="button" title="Image" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-media">
                                                    <i class="fa fa-image"></i> Media </button>
                                            </span>
                                            <span class="ql-format-group"> </span>
                                        </div>
                                        <!-- Create the editor container -->
                                        <div class="editor"> Hello World </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label "> Category: </label>
                                <div class="col-sm-10">
                                    <select class="c-select form-control boxed">
                                        <option selected>Select Category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label ">CSS Base: </label>
                                <div class="col-sm-10">
                                        <label>
                                            <input class="radio" name="css" type="radio" checked="checked">
                                            <span>CSS Grid</span>
                                        </label>
                                        <label>
                                            <input class="radio" type="radio" name="css">
                                            <span>Bootstrap</span>
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label ">JS Framework: </label>
                                <div class="col-sm-10">
                                        <label>
                                            <input class="radio" name="framework" type="radio" checked="checked">
                                            <span>No framework</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="framework" disabled="disabled">
                                            <span>AngularJS (Coming soon)</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="framework" disabled="disabled">
                                            <span>Vue (Coming soon)</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="framework" disabled="disabled">
                                            <span>Ember (Coming soon)</span>
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label ">JS Libraries: </label>
                                <div class="col-sm-10">
                                        <label>
                                            <input class="checkbox" type="checkbox" checked="checked">
                                            <span>Bootstrap</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox" checked="checked">
                                            <span>jQuery</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox" checked="checked">
                                            <span>Swiper</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox">
                                            <span>React</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox">
                                            <span>Polymer</span>
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label ">Fonts: </label>
                                <div class="col-sm-10">
                                        <label>
                                            <input class="checkbox" type="checkbox" checked="checked">
                                            <span>Open Sans</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox">
                                            <span>Lato</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox">
                                            <span>Raleway</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox">
                                            <span>Arial</span>
                                        </label>
                                        <label>
                                            <input class="checkbox" type="checkbox" checked="checked">
                                            <span>Font Awesome</span>
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label ">PHP Development: </label>
                                <div class="col-sm-10">
                                        <label>
                                            <input class="radio" name="php" type="radio" checked="checked">
                                            <span>Disabled</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="php" disabled="disabled">
                                            <span>Default (Coming soon)</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="php" disabled="disabled">
                                            <span>Laravel (Coming soon)</span>
                                        </label>
                                        <label class="disabled">
                                            <input class="radio" type="radio" name="php" disabled="disabled">
                                            <span>CakePHP (Coming soon)</span>
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                    <button type="reset" class="btn btn-danger"> Clear </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card card-block file-structure-card col-sm-4">
                        <h3 class="title"> <span class="title-text file-structure-title">Project structure</span></h3>
                        <div class="file-structure">
                            <!--
                            <ul class="tree-structure">
                                <li class="root">
                                    Application 
                                </li>
                                <li class="folder">
                                    css  
                                    <ul class="sub-files">
                                        <li>animate.min.css</li>
                                        <li>bootstrap.min.css</li>
                                        <li>font-awesome.min.css</li>
                                        <li>swiper.min.css</li>
                                    </ul>  
                                </li>
                                <li class="folder">images</li>
                                <li class="folder">
                                    js
                                    <ul class="sub-files">
                                        <li>bootstrap.min.js</li>
                                        <li>jquery.min.js</li>
                                        <li>swiper.min.js</li>
                                    </ul>  
                                </li>
                                <li class="folder">
                                    robots  
                                    <ul class="sub-files">
                                        <li>index.html</li>
                                    </ul>  
                                </li>
                                <li>index.html</li>
                            </ul>-->
                            <ul class="tree-structure">
                                <li class="root">
                                    <img src="{{ asset('images/root.png') }}" width="16" height="16"/> app 
                                </li>
                                <li class="folder">
                                    <img src="{{ asset('images/folder.png') }}" width="16" height="16"/> css  
                                    <ul class="sub">
                                        <li class="sub-file"><img src="{{ asset('images/css.png') }}" width="16" height="16"/> animate.min.css</li>
                                        <li class="sub-file"><img src="{{ asset('images/css.png') }}" width="16" height="16"/> grid-style.css</li>
                                        <li class="sub-file"><img src="{{ asset('images/css.png') }}" width="16" height="16"/> font-awesome.min.css</li>
                                        <li class="sub-file"><img src="{{ asset('images/css.png') }}" width="16" height="16"/> swiper.min.css</li>
                                    </ul>  
                                </li>
                                <li class="folder"><img src="{{ asset('images/folder.png') }}" width="16" height="16"/> images</li>
                                <li class="folder">
                                    <img src="{{ asset('images/folder.png') }}" width="16" height="16"/> js
                                    <ul class="sub">
                                        <li class="sub-file"><img src="{{ asset('images/js.png') }}" width="16" height="16"/> jquery.min.js</li>
                                        <li class="sub-file"><img src="{{ asset('images/js.png') }}" width="16" height="16"/> swiper.min.js</li>
                                    </ul>  
                                </li>
                                <li class="file"><img src="{{ asset('images/html.png') }}" width="16" height="16"/> index.html</li>
                                
                                <li class="special"><img src="{{ asset('images/git.png') }}" width="16" height="16"/> .gitignore</li>
                            </ul>
                        </div>
                        <div class="legend col-sm-12">
                            <ul class="col-sm-3">
                                <li><span class="file">&nbsp;</span> File</li>
                                <li><span class="folder">&nbsp;</span> Folder</li>
                            </ul>
                            <ul class="col-sm-9">
                                <li><span class="root">&nbsp;</span> Application Root Directory</li>
                                <li><span class="special">&nbsp;</span> Special File</li>
                            </ul>
                        </div>
                    </div>
                </article>
@endsection

@section('custom-js')
<script>
    $( ".project-name" ).on("keyup", function() {
        if($(".project-name").val() != ""){
            $(".project-file").text("Project file: " + $(".project-name").val().replace(/\s/g,'') + ".proj");
        } else {
            $(".project-file").text("Project file: ");
        }
        
    });
</script>

@endsection