<main id="main" class="site-main">

    <section class="site-section-small section-blog">

        <div class="container">

            <div class="text-center">

                <h1 class="section-title-big">Blog</h1>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
            </div>

            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->


            @foreach ($dataAll as $value)
                
           
            <div class="row">

                <div class="col-md-9">

                    <div class="blog-post">

                        <a href="blog-post.html"><img class="img-carousel post-img" src="{{asset($value->img)}}" alt=""></a>

                        <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{$value->titre}}</a></h3>

                                    
                            <p class="section-text">{{$value->description}}</p>
                            
                        </div><!-- /.post-content -->

                    </div><!-- /.blog-post -->
                    


                </div>
            </div>

            @endforeach
        </div>
        
    </section><!-- /.section-blog -->


