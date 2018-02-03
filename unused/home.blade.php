@extends('layouts.master-dashboard')

@section('title') Dashboard - Project list @endsection

@section('menu')
<li class="active open">
              <a href="">
                <i class="fa fa-th-large fa-fw"></i> Projects
                <i class="fa arrow"></i>
              </a>
              <ul>
                <li>
                  <a href="new-project">
                    <i class="fa fa-plus-circle fa-fw"></i> New project
                  </a>
                </li>
                <li>
                  <a href="items-list.html">
                    <i class="fa fa-folder fa-fw"></i> Import project
                  </a>
                </li>
                <li class="active">
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
<article class="content items-list-page">
<div class="title-search-block">
    <div class="title-block">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title"> <span class="title-text">My projects</span>
                <span class="title-description"> Displaying 46 projects from category: ALL </span>
                </h3>
                <div class="under-title">
                    <a href="new-project" class="btn btn-primary btn-sm rounded-s"> Create New</a>
                    <div class="action dropdown">
                        <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More actions </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-pencil-square-o icon"></i>Publish</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal">
                                <i class="fa fa-close icon"></i>Delete</a>
                        </div>
                    </div>
                    <div class="action dropdown">
                        <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Choose category </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="#">Add new category</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Favourites</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">FRI 2017</a>
                            <a class="dropdown-item" href="#">Personal</a>
                            <a class="dropdown-item" href="#">Other</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="items-search">
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary rounded-s" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="card items">
    <ul class="item-list striped">
        <li class="item item-list-header hidden-sm-down">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col item-col-header item-col-title">
                    <div>
                        <span>Name</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-sales">
                    <div>
                        <span>Likes</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-stats">
                    <div class="no-overflow">
                        <span>View Stats</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-category">
                    <div class="no-overflow">
                        <span>Category</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-author">
                    <div class="no-overflow">
                        <span>Author</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-visibility">
                    <div class="no-overflow">
                        <span>Visibility</span>
                    </div>
                </div>
                <div class="item-col item-col-header item-col-date">
                    <div>
                        <span>Created</span>
                    </div>
                </div>
                <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Web Technologies </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 46323 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">FRI 2017</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">Marko Kodrič</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Private</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Software Engineering </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 4567 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">FRI 2017</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">Marko Kodrič</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Private</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Introduction to Probability and Statistics </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 854 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">Other</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">Daenerys Targaryen</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Public</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Algorithms and Data Structures 2 </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 1861 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">Personal</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">Jon Snow</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Public</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Discrete structures </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 7891 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">Personal</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">Marko Kodrič</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Private</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-check">
                    <label class="item-check" id="select-all-items">
                        <input type="checkbox" class="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">Name</div>
                    <div>
                        <a href="editor" class="">
                            <h4 class="item-title"> Programming 1 </h4>
                        </a>
                    </div>
                </div>
                <div class="item-col item-col-sales">
                    <div class="item-heading">Sales</div>
                    <div> 95150 </div>
                </div>
                <div class="item-col item-col-stats no-overflow">
                    <div class="item-heading">Stats</div>
                    <div class="no-overflow">
                        <div class="item-stats sparkline" data-type="bar"></div>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">Category</div>
                    <div class="no-overflow">
                        <a href="">Other</a>
                    </div>
                </div>
                <div class="item-col item-col-author">
                    <div class="item-heading">Author</div>
                    <div class="no-overflow">
                        <a href="">John Doe</a>
                    </div>
                </div>
                <div class="item-col item-col-visibility">
                    <div class="item-heading">Visibility</div>
                    <div class="no-overflow">
                        <a href="">Public</a>
                    </div>
                </div>
                <div class="item-col item-col-date">
                    <div class="item-heading">Published</div>
                    <div class="no-overflow"> <?php echo (new \DateTime())->format('F jS, Y'); ?> </div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <a class="item-actions-toggle-btn">
                            <span class="inactive">
                                <i class="fa fa-cog"></i>
                            </span>
                            <span class="active">
                                <i class="fa fa-chevron-circle-right"></i>
                            </span>
                        </a>
                        <div class="item-actions-block">
                            <ul class="item-actions-list">
                                <li>
                                    <a class="favourite" href="#">
                                        <i class="fa fa-heart "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="edit" href="editor">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<nav class="text-center">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href=""><i class="fa fa-angle-double-left"></i> Prev </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href=""> 1 </a>
        </li>
        <li class="page-item">
            <a class="page-link" href=""> 2 </a>
        </li>
        <li class="page-item">
            <a class="page-link" href=""> 3 </a>
        </li>
        <li class="page-item">
            <a class="page-link" href=""> 4 </a>
        </li>
        <li class="page-item">
            <a class="page-link" href=""> 5 </a>
        </li>
        <li class="page-item">
            <a class="page-link" href=""> Next <i class="fa fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
</article>
 @endsection