@extends('backend.admin.home')

@section('title', "Enregistrement d'un évaluateur")

@section('content')
<div class="pagetitle">
    <h1>@yield('title')</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Accueil</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.evaluateur.index')}}">Liste des évaluateurs</a></li>
        <li class="breadcrumb-item active">Enregistrement</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card mt-2">
    <div class="row card-header mt-3">
        <div class="col-4"></div>
        <div class="col-lg-8 col-sm-12">
            <form action="{{ route('admin.search') }}" method="get">
                @csrf
                <div class="input-group justify-content-center"> 
                    <label for="search" class="mt-2 recherche">Rechercher par</label>
                    <input name="search" type="search" class="form-control @error('search') is-invalid @enderror ms-4" placeholder="E-mail / N° de Téléphone..." value="{{ $inputIne ?? '' }}">
                    <button type="submit" class="btn btn-primary"><span class="ri-search-line search-icon text-muted"></span></button>
                    {{-- <div class="invalid-feedback m">@error('search') {{ $message }} @enderror</div> --}}
                </div>
            </form>            
        </div>
    </div>
    <div class="card-body col-lg-10 m-auto">
        <form class="vstack mt-4  gap-2" action="{{ route('admin.evaluateur.store') }}" method="post" enctype="multipart/form-data">

            @method('post')
            @csrf

            <div class="row">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="floatingname" placeholder="name" value="{{old('name', $evaluateur->name)}}">
                        <label for="floatingname">Prénom</label>
                        <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="floatingnom" placeholder="nom" value="{{old('nom', $evaluateur->nom)}}">
                        <label for="floatingnom">Nom</label>
                        <div class="invalid-feedback">@error('nom') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('telephone') is-invalid @enderror" type="text" name="telephone" id="floatingtelephone" placeholder="telephone" value="{{old('telephone', $evaluateur->telephone)}}">
                        <label for="floatingtelephone">Téléphone</label>
                        <div class="invalid-feedback">@error('telephone') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="floatingemail" placeholder="email" value="{{old('email', $evaluateur->email)}}">
                        <label for="floatingemail">E-mail</label>
                        <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="floatingpassword" placeholder="password" >
                        <label for="floatingpassword">Mot de passe</label>
                        <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('confirme') is-invalid @enderror" type="password" name="confirme" id="floatingconfirme" placeholder="confirme" >
                        <label for="floatingconfirme">Confirmez votre mot de passe</label>
                        <div class="invalid-feedback">@error('confirme') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12 col-lg-10 mt-2 m-auto">
                    <div class="form-floating">
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="floatingphoto" placeholder="photo" value="{{old('photo', $evaluateur->photo)}}">
                        <label for="floatingphoto">Uploader une photo</label>
                        <div class="invalid-feedback">@error('photo') {{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
            <div class="row gap-4">              
                <div class="col-md-4 col-lg-10 m-auto">
                    <button type="submit" class="btn btn-primary">
                         Enregistrer
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
    
@endsection
    