@extends('app')

@section('title', 'bank - Telnest')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Bank Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/bank') }}">Bank</a></li>
          <li class="breadcrumb-item">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <form class="row g-3"  action="{{ url('bank/store') }}" method="POST">
                  @csrf
                    <div class="col-12">
                        <label for="names" class="form-label">Name</label>
                        <input type="text" name="names" id="names" class="form-control">
                    </div>
                <div class="col-12">
                    <label for="reks" class="form-label">Rek</label>
                    <input type="text" name="reks" id="reks" class="form-control">
                </div>
                <div class="col-12">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
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