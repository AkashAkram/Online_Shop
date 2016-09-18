{{--

<div class="side_banner">
    <div class="banner_img">
        <img src="{!! asset('surfhouse/site_images/logo2.png') !!}" class="img-responsive"
             alt="" width="200" />
        <div class="banner_holder">
            <h3>Now <br>
                is <br>
                Open!</h3>
        </div>
    </div>

</div>
--}}

<div class="menu_box">

    <h3 class="menu_head">Categories</h3>

    <ul class="side-nav">
        @foreach($categories as $cat)
            <li><a href="../cat/{!! $cat->id !!}">{!! $cat->category !!}</a></li>
        @endforeach
    </ul>
</div>

<div class="tags">
    <h4 class="tag_head">Tags Widget</h4>
    <ul class="tags_links">
        <li><a href="#">Kitesurf</a></li>
        <li><a href="#">Super</a></li>
        <li><a href="#">Duper</a></li>
        <li><a href="#">Theme</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Equipment</a></li>
        <li><a href="#">Best</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Apparel</a></li>
        <li><a href="#">Super</a></li>
        <li><a href="#">Duper</a></li>
        <li><a href="#">Theme</a></li>
        <li><a href="#">Responsiv</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Equipment</a></li>
    </ul>
    <a href="#" class="link1">View all tags</a></div>
<div class="tags">
    <h4 class="tag_head">Articles Experts</h4>
    <ul class="article_links">
        <li><a href="#">Eleifend option congue nihil</a></li>
        <li><a href="#">Investigationes demonst</a></li>
        <li><a href="#">Qui sequitur mutationem</a></li>
        <li><a href="#">videntur parum clar sollemnes</a></li>
        <li><a href="#">ullamcorper suscipit lobortis</a></li>
        <li><a href="#">commodo consequat. Duis autem</a></li>
        <li><a href="#">Investigationes demonst</a></li>
        <li><a href="#">ullamcorper suscipit lobortis</a></li>
        <li><a href="#">Qui sequitur mutationem</a></li>
        <li><a href="#">videntur parum clar sollemnes</a></li>
        <li><a href="#">ullamcorper suscipit lobortis</a></li>
    </ul>
    <a href="#" class="link1">View all</a></div>