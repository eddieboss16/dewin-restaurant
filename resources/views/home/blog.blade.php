<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Menu</h2>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">

                    @foreach ($data as $data)
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img height="200" src="food_img/{{$data->image}}" alt="" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">{{$data->price}}</a></h1>
                                <h4 class="pt20 pb20">{{$data->title}}</h4>
                                <p class="text-white">{{$data->detail}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">REVIEWS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">John Doe</h3>
                    <h6 class="testmonial-subtitle">Web Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nobis eligendi, quaerat accusamus ipsum sequi dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Steve Thomas</h3>
                    <h6 class="testmonial-subtitle">UX/UI Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum minus obcaecati cum eligendi perferendis magni dolorum ipsum magnam, sunt reiciendis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Miranda Joy</h3>
                    <h6 class="testmonial-subtitle">Graphic Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, nam. Earum nobis eligendi, dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>FIND US</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio delectus, sunt magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et, adipisci illo quam.</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> 12345 Fake ST NoWhere, AB Country</p>
                    <p><span class="ti-support pr-3"></span> (123) 456-7890</p>
                    <p><span class="ti-email pr-3"></span>info@website.com</p>
                </div>
            </div>
        </div>
    </div>