@extends('layouts.app', ['activePage' => 'business', 'titlePage' => __('Businesses')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Table of Stores</h4>
                            <p class="card-category">Click in the Store Logo to go to Store Details and Franchises / Branch
                                Offices</p>
                        </div>
                        <div class="card-body">
                            <div class="col-12 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Store</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th style="width: 33%">
                                            Logo
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Country
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr style="width: 33%">
                                            <td>
                                                <a href="{{ route('franchises') }}"><img src="{{ asset('material/img/costco.png') }}" alt="costco logo" style="width: 225px; height: 175px"></a>
                                            </td>
                                            <td>
                                                Patel Brothers
                                            </td>
                                            <td>
                                                Canada
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
                                                <img src="{{ asset('material/img/sams.png') }}" alt="sams logo" style="width: 225px; height: 175px">
                                            </td>
                                            <td>
                                                Shop Rites
                                            </td>
                                            <td>
                                                US
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
                                                <img src="{{ asset('material/img/walmart.png') }}" alt="walmart logo" style="width: 225px; height: 175px">
                                            </td>
                                            <td>
                                                FreshCo
                                            </td>
                                            <td>
                                                Canada
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
                                                <img src="{{ asset('material/img/oxxo.png') }}" alt="oxxo logo" style="width: 225px; height: 175px">
                                            </td>
                                            <td>
                                                Dollarama
                                            </td>
                                            <td>
                                                US
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
              <h5 class="modal-title" id="exampleModalLabel">Add New Store</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="admin_name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Country:</label>
                  <input class="form-control" id="admin_email" type="text"/>
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
