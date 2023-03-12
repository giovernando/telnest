@extends('app')

@section('title', 'room - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Room Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/room') }}">Room</a></li>
          <li class="breadcrumb-item">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <form class="row g-3"  action="{{ url('room/store') }}" method="POST">
                  @csrf
                  <div class="col-12">
                    <label for="houtels_id" class="form-label">Houtels_id</label>
                    <input type="number" name="houtels_id" id="houtels_id" class="form-control">
                </div>
                    <div class="col-12">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="deskription" class="form-label">deskription</label>
                        <input type="text" name="deskription" id="deskripton" class="form-control">
                    </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <div class="col g-12">
                    <button type="submit" class="btn btn-primary btn-pill">Save</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection