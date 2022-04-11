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
                                                Costco
                                            </td>
                                            <td>
                                                USA
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
                                                Sam's Club
                                            </td>
                                            <td>
                                                Mexico
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
                                                Walmart
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
                                                OXXO
                                            </td>
                                            <td>
                                                Mexico
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
@endsection
