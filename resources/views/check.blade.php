@extends('layouts.app')
@section('title','Checkout')

@section('css')


   <style>
    
        
        
        
   </style>
    
@endsection

@section('content')

 <div class="jumbotron text-center">
      <h1 class="display-3">خریداری کے لئے آپ کا شکریہ</h1>
      <p class="lead"><strong>براہ کرم اپنا ای میل چیک کریں</strong>  مزید ہدایت کے لئے <hr>
      <p class="lead">
        <a class="btn but-now-2 btn-sm btn-primary btn-special waves-effect waves-light" href="#" role="button">Continue to homepage</a>
      </p>
 </div>

<div>
  
  <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://world.rekhta.org/Images/User/UserHeaderImage/3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 white-text text-center py-3">
              <img src="https://world.rekhta.org/Images/User/Quill.png" class="img-fluid" style="width:250px;border-radius:50%" />
            <h1 class="mb-0 pt-md-5 pt-5 text-white font-weight-bold wow fadeInDown" data-wow-delay="0.3s">John Doe</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 lm-1">
                <div class="container-fluid px-0">
                    <div class="row my-3 py-3 border">
                        <div class="col-lg-12 col-md-12">
                            <ul class="nav nav-pills pills-font mb-3 pl-lg-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item pl-0 pr-lg-5 pr-md-3 pr-sm-4">
                                  <a class="nav-link active" id="pills-desc-tab" data-toggle="pill" href="#pills-desc" role="tab" aria-controls="pills-desc" aria-selected="true">Poetry</a>
                                </li>
                                <li class="nav-item pl-lg-3 pr-lg-5 pr-md-3 pr-sm-4">
                                  <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Books</a>
                                </li>
                                <li class="nav-item pl-lg-3 pr-lg-5 pr-md-3 pr-sm-4">
                                  <a class="nav-link" id="pills-virtual-tab" data-toggle="pill" href="#pills-virtual" role="tab" aria-controls="pills-virtual" aria-selected="false">Poet</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-lg-12 i-check text-center">
                                                <h1 class="fw-500">No favorites</h1>
                                                <h4 class="">The poetry you love will appear here once you start marking your favorites</h4>
                                                <a href="{{route('home')}}">Go To Home Page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                                    <div class="container-fluid">
                                        <div class="row py-5 ">
                                            <div class="col-lg-12 i-check text-center">
                                                <h1 class="fw-500">No books</h1>
                                                <h4 class="">Mark books as favorites to see them here</h4>
                                                <a href="{{route('home')}}">Go To Home Page</a>
                                                <div class="py-4">
                                                    
                                                <table class="table ">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Book Name</th>
                                                      <th scope="col">Book PrIce</th>
                                                      <th scope="col">Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <th scope="row">1</th>
                                                      <td>Mark</td>
                                                      <td>Rs 350</td>
                                                      <td> <a href="#" class="btn btn-primary">Download</a> </td>
                                                    </tr>
                                                    <tr>
                                                       <th scope="row">1</th>
                                                      <td>Mark</td>
                                                      <td>Rs 350</td>
                                                      <td> <a href="#" class="btn btn-primary">View PDF</a> </td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">1</th>
                                                      <td>Mark</td>
                                                      <td>Rs 350</td>
                                                      <td> <a href="#" class="btn btn-primary">Download</a> </td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">1</th>
                                                      <td>Mark</td>
                                                      <td>Rs 350</td>
                                                      <td> <a href="#" class="btn btn-primary">View PDF</a> </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-virtual" role="tabpanel" aria-labelledby="pills-virtual-tab">
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-lg-12 text-center">
                                                  <h1 class="fw-500">No poets</h1>
                                                <h4 class="">Mark poets as you love will appear here once you start marking your favorites</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-floor" role="tabpanel" aria-labelledby="pills-floor-tab">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 i-check text-center">
                                            <img src="assets/images/floor.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-epc" role="tabpanel" aria-labelledby="pills-epc-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-7 i-check">
                                                <div>

                                                    <h3 class="text-left text-white pl-2 py-2 font-weight-bold mb-4 default-color">Energy Efficiency Rating</h3>

                                                    <p class="text-left fw-500 fs-13">Very Energy Efficient - Lower Running Cost</p>
                                      
                                                    <div class="d-flex justify-content-between">
                                                      <small class="text-muted">(92 Plus)</small>
                                                      <small><span><strong>A</strong></span><span></span></small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                      <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                      
                                                    <div class="d-flex justify-content-between">
                                                      <small class="text-muted">(81-91)</small>
                                                      <small><span><strong>B</strong></span><span></span></small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                      <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                      
                                                    <div class="d-flex justify-content-between">
                                                      <small class="text-muted">(69-80)</small>
                                                      <small><span><strong>C</strong></span><span></span></small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                      
                                                    <div class="d-flex justify-content-between">
                                                      <small class="text-muted">(55-68)</small>
                                                      <small><span><strong>D</strong></span><span></span></small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <p class="text-left fw-500 fs-13 pt-3">Not Energy Efficient - Higher Running Cost</p>
                                      
                                                  </div>
                                            </div>
                                            <div class="col-lg-5">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</div>
@endsection

@section('js')

   
   

@endsection


