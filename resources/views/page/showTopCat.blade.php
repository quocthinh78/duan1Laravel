
            @foreach ($showTopCat as $cat)
                <div class="col-md-3 col-sm-6 works">
                    <div class="works-box">
                    <img src="/images/{{$cat->image}}" alt="">
                        <div class="box-overflow">
                            <a class="streched-link" href="/cuon-sach/{{$cat->name}}">
                                <i class="fas fa-camera-retro"></i>
                            </a>
                            ff
                            <h5>{{$cat->name}}</h5>
                            <p>{{$cat->smallDes}}</p>
                        </div>
                    </div>
                </div>
            @endforeach