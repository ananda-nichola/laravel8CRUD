
@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <h1 class="row justify-content-center mb-3">{{ $post->title }}</h1>

            <p class="row justify-content-center mb-3">By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                 class="img-fluid">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                 class="img-fluid">
            @endif


        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>
       
    
        <a href="/blog" class="d-block mt-3">Back to Posts</a>

        </div>
    </div>
</div>

<div id="disqus_thread" class="mt-4"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-18yp3sp3hh.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

 
   
    
@endsection