@extends('layouts.app')
@section('title')
    {{ $article->title }} - {{$settings["general"]->site_title}} 
@endsection
 
@section('content')  
    <section style="background: white;">
        <div style="margin-top: 4rem;" class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href="/" class="txt27">
                    Home
                </a> 

                <span class="txt29 m-l-10 m-r-10">/</span>

                <a href="/blog" class="txt27">
                    Blog
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <span class="txt29">
                    {{ $article->title }}

                </span>
            </div>
        </div> 

        <div class="container">
            <div class="row ">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                        <!-- Block4 -->
                
                            <div class="blo4 p-b-63">
                                <!-- - -->
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                    <a>
                                        <img id="lazy" src="{{ $article->image_url }}"  alt="IMG-BLOG">
                                    </a>

                                    <div class="date-blo4 flex-col-c-m">
                                        <span class="txt30 m-b-4">
                                            {{ $article->created_at->formatLocalized('%d')}}
                                        </span>

                                        <span class="txt31">
                                            {{ $article->created_at->format('M, Y') }}
                                        </span>
                                    </div>
                                </div>

                                <!-- - -->
                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a class="tit9">{{ $article->title }}</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by {{ $article->author }}
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            {{ $article->created_at->format('D M, Y') }}
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            {{ $article->keywords }}
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            {{ $article->amount_of_comments }}
                                        </span>
                                    </div>

                                    <p>
                                        {{ $article->full_content }}
                                    </p>
                                </div>
                            </div>
                       
                            <!-- Comments -->
                            <h4>Display Comments</h4>

                            @foreach($article->comments as $comment)
                            <div class="comment">
                                <img id="lazy" class="comment-pic" src="https://upload.wikimedia.org/wikipedia/ru/thumb/b/bc/Garfield_the_Cat.svg/1200px-Garfield_the_Cat.svg.png" class="commentPic" alt="user Pic">
                                <div class="commentBody">
                                <div class="commentHeader">
                                    <h3 class="commentAuthor">{{ $comment->name }}</h3>
                                <span class="publishDate">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                    <span class="commentContent">{{ $comment->comment }}</span>
                                </div>
                            </div>

                                {{-- <div class="display-comment">
                                    <strong>{{ $comment->name }}</strong>
                                    <p>{{ $comment->email }}</p>
                                    <p>{{ $comment->website }}</p>
                                    <p>{{ $comment->comment }}</p>

                                    <a href="" id="reply"></a>                                   
                                </div> --}}
                            @endforeach  
 
                                <hr />
                            <h4>Add comment</h4>
                            <!-- Comments -->
                        <!-- Leave a comment -->
                        <form method="post" action="/blog/{{ $article->title }}" class="leave-comment p-t-10">
                            @csrf
                            <h4 class="txt33 p-b-14">
                                Leave a Comment
                            </h4> 

                            <p> 
                                Your email address will not be published. Required fields are marked *
                            </p>

                            <textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40 @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" placeholder="Comment..."></textarea>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input id="name" type="text" class="bo-rad-10 sizefull txt10 p-l-20 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input id="email" type="text" class="bo-rad-10 sizefull txt10 p-l-20 form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-30">
                                <input id="website" type="text" class="bo-rad-10 sizefull txt10 p-l-20 form-control form-control-lg @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" required autocomplete="website" autofocus placeholder="website">

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <input id="id" type="hidden" class="bo-rad-10 sizefull txt10 p-l-20 form-control form-control-lg @error('id') is-invalid @enderror" name="id" value="{{ $article->id }}" required autocomplete="id" autofocus placeholder="id">

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="hidden" name="id"  />

                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size31 txt11 trans-0-4">
                                Post Comment
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
                            <button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <h4 class="txt33 bo5-b p-b-35 p-t-58">
                                Categories
                            </h4>

                            <ul>
                                @foreach ($categories as $item)
                                    <li class="bo5-b p-t-8 p-b-8">
                                        
                                        <a href="{{ url("/blog/category/$item->id") }}" class="txt27">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endforeach
                                
                            </ul>
                        </div> 

                        <!-- Most Popular -->
                        {{-- <div class="popular">
                            <h4 class="txt33 p-b-35 p-t-58">
                                Most popular
                            </h4>

                            <ul>
                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img id="lazy" src="images/blog-11.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Best Places for Wine
                                        </a>

                                        <span class="txt14">
                                            3 days ago
                                        </span>
                                    </div>
                                </li>

                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img id="lazy" src="images/blog-12.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Eggs and Cheese
                                        </a>

                                        <span class="txt14">
                                            July 2, 2017
                                        </span>
                                    </div>
                                </li>

                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img id="lazy" src="images/blog-13.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Style the Wedding Party
                                        </a>

                                        <span class="txt14">
                                            May 28, 2017
                                        </span>
                                    </div>
                                </li>

                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img id="lazy" src="images/blog-14.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Cooking recipe Delicious
                                        </a>

                                        <span class="txt14">
                                            May 25, 2017
                                        </span>
                                    </div>
                                </li>

                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img id="lazy" src="images/blog-15.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Pizza is prepared fresh
                                        </a>

                                        <span class="txt14">
                                            May 2, 2017
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}


                        <!-- Archive -->
                        <div class="archive">
                            <h4 class="txt33 p-b-20 p-t-43">
                                Archive
                            </h4>

                            <ul>
                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        uly 2018
                                    </a>

                                    <span class="txt29">
                                        (9)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        June 2018
                                    </a>

                                    <span class="txt29">
                                        (39)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        May 2018
                                    </a>

                                    <span class="txt29">
                                        (29)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        April  2018
                                    </a>

                                    <span class="txt29">
                                        (35)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        March 2018
                                    </a>

                                    <span class="txt29">
                                        (22)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        February 2018
                                    </a>

                                    <span class="txt29">
                                        (32)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        January 2018
                                    </a>

                                    <span class="txt29">
                                        (21)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                <a href="#" class="txt27">
                                        December 2017
                                    </a>

                                    <span class="txt29">
                                        (26)
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
