@extends('front-end.master')

@section('content')

<main class="mb-5">
    <div class="row ">
        <a class="articles col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6" href="/view/{{$blog->id}}">
            <div>
                <img src="{{ asset('uploads'.$blog->img) }}" alt="" class="img-fluid mb-3">
                <h2> {{ $blog->title }} </h2>
                <p>
                    {{ $blog->description }}
                </p>
            </div>
        </a>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 blog-scroll">
            @foreach($blogs as $blog_page)
            <a href="/view/{{$blog_page->id}}" class="articles">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-12 mb-4">
                        <img class="img-fluid " src="{{ asset('uploads'.$blog_page->img) }}" alt="">
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 blog">
                        <h2>
                            {{ $blog_page->title }}
                        </h2>
                        <p class="article-text">
                            {{ $blog_page->description }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    </main>
@endsection

{{-- @section('js')
    <script>
    $( document ).ready(function()
    {
        let searchParams = new URLSearchParams(window.location.search)
        if(searchParams.has('article'))
        {
            setTimeout(function()
            {
                let param = searchParams.get('article')

                $.ajax({
                    method: 'GET',
                    url: "{{ route('get-acrticle-content-data') }}",
                    data:
                    {
                        id: param
                    },
                    success:function(data)
                    {
                        $('#articleModal').modal('show')
                        $('#article-img').attr('src','uploads/'+data.img);
                        $('#article-title').text(data.title);
                        $('#article-text').html(data.text);
                        $('#article-url').attr('href',data.url);
                    }
                })
            },100)
        }

        $('.article-modal').click(function(){
            $.ajax({
                method: 'GET',
                url: "{{ route('get-acrticle-content-data') }}",
                data:{
                    id: $(this).attr('data-article-id')
                },
                success:function(data){
                    window.history.pushState('','','?article='+data.id);
                    $('#article-img').attr('src','uploads/'+data.img);
                    $('#article-title').text(data.title);
                    $('#article-text').html(data.text);
                    $('#article-url').attr('href',data.url);
                }
            })
        });
    })
    </script>
@endsection --}}

