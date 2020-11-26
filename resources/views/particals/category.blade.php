<section id="works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="works-title">
                    <h1>Danh mục sách</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-md-12 filter">
                <div class="ul-filter">
                    <li onclick="showTop('0')" style="color:black;" name="list-nav">All</li>
                    @foreach ($category as $category)
                        <li onclick="showTop({{$category->id}})" style="color:black;" name="list-nav">{{$category->name}}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row" id="filterTop">
            @foreach ($cat as $cat)
                <div class="col-md-3 col-sm-6 works">
                    <div class="works-box">
                    <img src="/images/{{$cat->image}}" alt="">
                        <div class="box-overflow">
                            <a class="streched-link" href="/cuon-sach/{{$cat->name}}">
                                <i class="fas fa-camera-retro"></i>
                            </a>
                            <h5>{{$cat->name}}</h5>
                            <p>{{$cat->smallDes}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>