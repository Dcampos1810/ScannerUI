@extends('layouts.app', ['activePage' => 'business', 'titlePage' => __('Businesses')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Details of Store</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Name</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Name of the Store" value="Name of the Store">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="Email of the Store">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Address</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Address of the Store">
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress2">Address 2</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="Address of the Store">
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Country</label>
                                    <input type="text" class="form-control" id="inputCity" value="Country of the Store">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>State 1</option>
                                      <option>State 2</option>
                                      <option>State 3</option>
                                      <option>State 4</option>
                                      <option>State 5</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                  </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose Logo File</label>
                                    </div>
                                  </div>

                                <button type="submit" class="btn btn-primary">Save Data</button>
                              </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Table of Franchises</h4>
                            <p class="card-category">Click in the Actions Section to go to Franchise Details or Delete Franchise</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Franchise</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            City
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Franchise 1
                                            </td>
                                            <td>
                                                New York
                                            </td>
                                            <td>
                                                18 Eagle Drive, Bernalillo,nm, 83004  United States
                                            </td>
                                            <td class="td-actions text-center">
                                                <a class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a class="btn btn-danger btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Franchise 2
                                            </td>
                                            <td>
                                                Mexico City
                                            </td>
                                            <td>
                                                Pilares 28,MEX,52179,Mexico
                                            </td>
                                            <td class="td-actions text-center">
                                                <a class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a class="btn btn-danger btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Franchise 3
                                            </td>
                                            <td>
                                                Canada
                                            </td>
                                            <td>
                                                Taluk Crescent, Fraser Lake, Bc, Canada
                                            </td>
                                            <td class="td-actions text-center">
                                                <a class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a class="btn btn-danger btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Franchise 4
                                            </td>
                                            <td>
                                                California
                                            </td>
                                            <td>
                                                18 Avenue Canora, Alpine,ca, 91901  United States
                                            </td>
                                            <td class="td-actions text-center">
                                                <a class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a class="btn btn-danger btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Franchise</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">City:</label>
                  <input class="form-control" id="city" type="text"/>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Address:</label>
                    <input class="form-control" id="address" type="text"/>
                  </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Google Maps Location:</label>
                    <input class="form-control" id="google_maps" type="text"/>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="addAdmin();">Save Admin</button>
            </div>
          </div>
        </div>
      </div>
@endsection
