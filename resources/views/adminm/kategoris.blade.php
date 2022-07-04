@extends('layouts.app_master')
@section('contenmaster')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
              <h6 class="card-title card-padding pb-0">Kategoris</h6>
              <div class="table-responsive">
                <table class="table table-hoverable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $no=1
                      @endphp
                    @foreach ( $ktg as $k)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $k->name }}</td>
                          <td>
                              <a href="">edit</a>
                              <form action="{{ route('kategoris.destroy',$k->id) }}" method="POST">
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
    </main>
    <!-- partial:../../partials/_footer.html -->
    <footer>
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>
          </div>
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- partial -->
</div>
@stop
