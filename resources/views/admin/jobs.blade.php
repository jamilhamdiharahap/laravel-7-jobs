@extends('layouts.app_admin')
@section('conten')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            JOBS
                        </h1>
                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal"><div class="demo-google-material-icon"><i class="material-icons">add_box</i></div></button>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Job Type</th>
                                        <th>Job Category</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Job Type</th>
                                        <th>Job Category</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php
                                        $no=1
                                    @endphp
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $job->jobsType->name }}</td>
                                            <td>{{ $job->jobsKtg->name }}</td>
                                            <td>{{ $job->salary }}</td>
                                            <td style="display: flex">
                                                <a  href="#" type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#update" class="demo-google-material-icon"><i class="material-icons">create</i></a>
                                                <form action="{{ route('lowongan.destroy',$job->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-default waves-effect m-r-20" style="border: none"><i class="material-icons" style="color: #F44336">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- create tables --}}
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="defaultModalLabel">JOB</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{ route('lowongan.store') }}" method="POST">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-md-8 col-lg-offset-1 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <div class="form-line">
                                    <textarea name="desc" cols="20" rows="5" class="form-control no-resize" required></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-8 col-lg-offset-1 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <select name="id_type" class="form-control show-tick">
                                    @foreach ( $type as $value)
                                         <option value="{{ $value->id_type }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-8 col-lg-offset-1 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <select name="salary" class="form-control show-tick">
                                    <option value="5000000">Dibawah 5.000.000</option>
                                    <option value="10000000">Dibawah 10.000.000</option>
                                    <option value="12000000">Dibawah 12.000.000</option>
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-8 col-lg-offset-1 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <select name="id_ktg" class="form-control show-tick">
                                    @foreach ( $ktg as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">CREATE</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

    {{-- update tables --}}

    {{-- @foreach ( $jobs as $job )
    <div class="modal fade" id="update" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="defaultModalLabel">JOB TYPE</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{ route('jenispekerjaan.update',$type->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Type</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address_2" value="{{ $type->name }}" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}
</section>
@stop
