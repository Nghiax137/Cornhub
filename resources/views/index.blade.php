@extends('masterpage.layouts')
@section('content')
<div class="col-xs-12 carausel-sliderWidget">
    <section id="halim-advanced-widget-4">
       <div class="section-heading">
          <a href="danhmuc.php" title="Phim Chiếu Rạp">
          <span class="h-text">Phim Chiếu Rạp</span>
          </a>
          <ul class="heading-nav pull-right hidden-xs">
             <li class="section-btn halim_ajax_get_post" data-catid="4" data-showpost="12"
                data-widgetid="halim-advanced-widget-4" data-layout="6col"><span
                data-text="Chiếu Rạp"></span></li>
          </ul>
       </div>
       <div id="halim-advanced-widget-4-ajax-box" class="halim_box">
          @foreach ($movies as $movie)
          <article class="col-md-2 col-sm-4 col-xs-6 thumb grid-item post-38424">
             <div class="halim-item">
                <a class="halim-thumb" href="{{ $movie['link'] }}" title="{{ $movie['title'] }}">
                   <figure><img class="lazy img-responsive" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" title="{{ $movie['title'] }}"></figure>
                   <span class="status">{{ $movie['status'] }}</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>{{ $movie['episode'] }}</span>
                   <div class="icon_overlay"></div>
                   <div class="halim-post-title-box">
                      <div class="halim-post-title ">
                         <p class="entry-title">{{ $movie['title'] }}</p>
                         <p class="original_title">{{ $movie['original_title'] }}</p>
                      </div>
                   </div>
                </a>
             </div>
          </article>
          @endforeach
       </div>
  </section>
 <div class="clearfix"></div>
</div>


<main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
 <section id="halim-advanced-widget-2">
    <div class="section-heading">
       <a href="danhmuc.php" title="Phim Bộ">
       <span class="h-text">Phim Bộ</span>
       </a>
    </div>
    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
       @foreach ($movies as $movie)

<article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
 <div class="halim-item">
     <a class="halim-thumb" href="{{ $movie['link'] }}">
         <figure><img class="lazy img-responsive" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" title="{{ $movie['title'] }}"></figure>
         <span class="status">{{ $movie['status'] }}</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>{{ $movie['episode'] }}</span>
         <div class="icon_overlay"></div>
         <div class="halim-post-title-box">
             <div class="halim-post-title ">
                 <p class="entry-title">{{ $movie['title'] }}</p>
                 <p class="original_title">{{ $movie['original_title'] }}</p>
             </div>
         </div>
     </a>
 </div>
</article>
@endforeach
 </div>
</section>


 <div class="clearfix"></div>
</main>
<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
 <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
    <div class="section-bar clearfix">
       <div class="section-title">
          <span>Top Views</span>
          <ul class="halim-popular-tab" role="tablist">
             <li role="presentation" class="active">
                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                   data-type="today">Day</a>
             </li>
             <li role="presentation">
                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                   data-type="week">Week</a>
             </li>
             <li role="presentation">
                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                   data-type="month">Month</a>
             </li>
             <li role="presentation">
                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                   data-type="all">All</a>
             </li>
          </ul>
       </div>
    </div>


   <section class="tab-content">
<div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
<div class="halim-ajax-popular-post-loading hidden"></div>
<div id="halim-ajax-popular-post" class="popular-post">
 @foreach ($popularPosts as $post)
     <div class="item post-37176">
         <a href="{{ $post['link'] }}" title="{{ $post['title'] }}">
             <div class="item-link">
                 <img src="{{ $post['image'] }}" class="lazy post-thumb" alt="{{ $post['title'] }}" title="{{ $post['title'] }}" />
                 <span class="is_trailer">{{ $post['status'] }}</span>
             </div>
             <p class="title">{{ $post['title'] }}</p>
         </a>
         <div class="viewsCount" style="color: #9d9d9d;">{{ $post['views'] }}</div>
         <div style="float: left;">
             <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;">
                 <span style="width: 0%"></span>
             </span>
         </div>
     </div>
 @endforeach
</div>
</div>
</section>
<div class="clearfix"></div>
