<section id="ourteam">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="team-title">
                    <h1>Tác giả</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            @foreach ($author as $author)
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <div class=member-image>
                        <img src="../images/{{$author->image}}" alt="" style="height:370px;">
                        <div class="icon-hidden">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{$author->name}}</h4>
                        <span>TOP AUTHOR</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>