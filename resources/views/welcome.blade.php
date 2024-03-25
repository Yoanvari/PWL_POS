@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<h1>Dashboard</h1>
@stop
@section('content')

<div class="row">
    <div class="col-md-12">

      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">m_user</h3>
        </div>
        <div class="card-body">
          <!-- Date dd/mm/yyyy -->
          <div class="form-group">
            <label>level_id</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi-key"></i></span>
              </div>
              <input type="text" class="form-control">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <!-- Date mm/dd/yyyy -->
          <div class="form-group">
            <label>Username</label>

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi-person"></i></span>
                </div>
                <input type="text" class="form-control" >
              </div>
              <!-- /.input group -->
            </div>
          <!-- /.form group -->

          <!-- phone mask -->
          <div class="form-group">
            <label>Nama</label>

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi-person-fill"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
              <!-- /.input group -->
            </div>
          <!-- /.form group -->

          <!-- phone mask -->
          <div class="form-group">
            <label>password</label>

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi-lock"></i></span>
                </div>
                <input type="text" class="form-control">
              </div>
              <!-- /.input group -->
            </div>
          <!-- /.form group -->

          <button type = "submit" class ="btn btn-info">Submit </button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->\

@stop
@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
