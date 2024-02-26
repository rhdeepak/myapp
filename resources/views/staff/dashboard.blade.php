@extends('layouts.app')
@section('content')
<div class="container-fluid">
    
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3" >
                                <div class="card-header">Active Project</div>
                                <div class="card-body">
                                  <h5 class="card-title"><h1>50</h1></h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-warning mb-3" >
                                <div class="card-header">Pending Project</div>
                                <div class="card-body">
                                  <h5 class="card-title"><h1>15</h1></h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3" >
                                <div class="card-header">Complete Project</div>
                                <div class="card-body">
                                  <h5 class="card-title"><h1>35</h1></h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                    </div>

                    {{-- next row --}}
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card text-white bg-success mb-3" >
                            <div class="card-header">Complete Project</div>
                            <div class="card-body">
                              <h5 class="card-title"><h1>35</h1></h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-success mb-3" >
                            <div class="card-header">Complete Project</div>
                            <div class="card-body">
                              <h5 class="card-title"><h1>35</h1></h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    </div>
                   

</div>

@endsection
