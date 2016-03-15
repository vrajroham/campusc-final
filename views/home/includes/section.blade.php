<div class="home-intro light" id="home-intro">
    <div class="container">
       @if(Request::session()->get("status")!=null)
           <div class="row">
                <div class="col-md-12 alert alert-warning text-center">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    {{Request::session()->get("status")}}
                </div>
           </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <p>
                    The fastest way to grow your business with the leader in <em>Technology</em>
                    <span>Check out our options and features included.</span>
                </p>
            </div>
            <div class="col-md-4">
                <div class="get-started">
                    <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                    <div class="learn-more">or <a href="index.html">learn more.</a></div>
                </div>
            </div>
        </div>

    </div>
</div>