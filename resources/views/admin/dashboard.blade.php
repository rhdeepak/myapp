@extends('layouts.app')
  
@section('content')
<div class="container-fluid">
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" >
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
        <div class="card  mb-3" >
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="md-0">Staff</div>
                <a href="#" class="btn btn-outline-success">View all Staff</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr class="table-warning">
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Designation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-success">
                        <th scope="row">1</th>
                        <td>kumar</td>
                        <td>Rana</td>
                        <td>Backend</td>
                      </tr>
                      <tr class="table-warning">
                        <th scope="row">2</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr class="table-success">
                        <th scope="row">3</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr class="table-warning">
                        <th scope="row">4</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr class="table-success">
                        <th scope="row">5</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                     
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div class="card  mb-3" >
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="md-0">client</div>
                <a href="#" class="btn btn-outline-success">View all Client</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr class="table-warning">
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Designation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-success">
                        <th scope="row">1</th>
                        <td>kumar</td>
                        <td>Rana</td>
                        <td>Backend</td>
                      </tr>
                      <tr class="table-warning">
                        <th scope="row">2</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr class="table-success">
                        <th scope="row">3</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>kumar</td>
                        <td>Sharma</td>
                        <td>Frontend</td>
                      </tr>
                     
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
    
    </div>
    {{-- chat --}}
   <div class="card">
    <div class="card-header bg-success text-white text-center"><h3>Chats</h3></div>
    <div class="card-body">
      <div class="row justify-content-center">
      
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" >
                <div class="card-body">
                  <label for="exampleFormControlTextarea1" class="form-label">Admin-Client</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>  
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" >
                <div class="card-body">
                  <label for="exampleFormControlTextarea1" class="form-label">Admin-Staff</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>  
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" >
                <div class="card-body">
                  <label for="exampleFormControlTextarea1" class="form-label">Client-Staff</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>  
                </div>
              </div>
        </div>
        
      </div>
    </div>
   </div>

</div>
@endsection