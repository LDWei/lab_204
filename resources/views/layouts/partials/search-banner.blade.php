<!-- begin search-banner -->
<div class="search-banner has-bg">
    <!-- begin bg-cover -->
    <div class="bg-cover">
        <img src="assets/img/cover.jpg" alt="" />
    </div>
    <!-- end bg-cover -->
    <!-- begin container -->
    @section("search")
    <div class="container">
        <h1>1,293 Post for discussion</h1>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" placeholder="Search the forums" />
            <span class="input-group-btn">
                    <button type="submit" class="btn btn-lg"><i class="fa fa-search"></i></button>
                </span>
        </div>
        <h5>Browse by Popular Categories</h5>

        <ul class="popular-tags">
            <li><a href="#"><i class="fa fa-circle text-danger"></i> CSS</a></li>
            <li><a href="#"><i class="fa fa-circle text-primary"></i> Bootstrap</a></li>
            <li><a href="#"><i class="fa fa-circle text-warning"></i> Javascript</a></li>
            <li><a href="#"><i class="fa fa-circle"></i> jQuery</a></li>
            <li><a href="#"><i class="fa fa-circle text-success"></i> Android</a></li>
            <li><a href="#"><i class="fa fa-circle text-muted"></i> iOS</a></li>
            <li><a href="#"><i class="fa fa-circle text-purple"></i> Template</a></li>
        </ul>
    </div>
@show
    <!-- end container -->
</div>
<!-- end search-banner -->