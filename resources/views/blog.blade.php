@include('layouts.structure.header')
@include('layouts.structure.navbar')
@yield('content')

<!--
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Our Blog!</h1>
                    <p>Enjoy reading our posts. Click on a post to read!</p>
                </div>
                <div class="col-4">
                    <p>Create new Post</p>
                    <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                </div>
            </div>
            @forelse($posts as $post)
<ul>
                    <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                </ul>
        @empty
                <p class="text-warning">No blog Posts available</p>
@endforelse
        </div>
    </div>
</div>
-->
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
            <h2>Blog</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    @foreach ($posts as $post)
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('/assets/img/blog/news-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time
                                                datetime="2020-01-01">{{ $post->created_at }}</time></a></li>

                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $post->description }}
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                    @endforeach

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="active"><a href="#">1</a></li>
                            <li class=""><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($posts as $post)
                                <div class="post-item clearfix text-wrap">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4 class="text-wrap"><a href="blog-single.html">{{ $post->title }}</a></h4>
                                    <time datetime="2020-01-01">{{ $post->created_at }}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->





@include('layouts.structure.footer')
