<!-- Sidebar -->
<div class="col-md-3">
    <aside class="sidebar">
        <div class="widget blog-widget">
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#recentPosts" data-toggle="tab" aria-expanded="false">Recent</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="popularPosts">
                        <ul class="post-list">
                            <li class="post">
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="{{ route('blog-single-post') }}">
                                            <img src="{{ asset('onion/img/sidebar.webp') }}" alt="Single Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('blog-single-post') }}">Photo Shoot Ideas</a>
                                    <div class="post-meta">
                                        Jan 10, 2016
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="{{ route('blog-single-post') }}">
                                            <img src="{{ asset('onion/img/sidebar.webp') }}" alt="Single Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('blog-single-post') }}">How To Use Flash Photography</a>
                                    <div class="post-meta">
                                        Jan 10, 2016
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="{{ route('blog-single-post') }}">
                                            <img src="{{ asset('onion/img/sidebar.webp') }}" alt="Single Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('blog-single-post') }}">Lightroom Vs Photoshop</a>
                                    <div class="post-meta">
                                        Jan 10, 2016
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget tags">
            <a href="#">inspiration</a> <a href="#">portrait</a> <a href="#">wildlife</a> <a href="#">educational</a> <a href="#">photoshop</a> <a href="#">travel</a> <a href="#">tips</a> <a href="#">contest</a>
        </div>
    </aside>
</div>