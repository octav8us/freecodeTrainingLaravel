 @extends('layouts.app')

@section('content')
<div class="container border p-5">

    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">

            <div class="col-8 offset-2">

                <div class="row mb-3">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div>
                    <label for="title" class="col-4 col-form-label ">title</label>

                    <input id="title"
                           type="text" class="form-control @error('title') is-invalid
                        @enderror" name="title" value="{{ old('title')?? $user->profile->title }}"
                           autocomplete="title">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </div>
                    <div>
                    <label for="description" class="col-4 col-form-label ">description</label>

                    <input id="description"
                           type="text" class="form-control @error('description') is-invalid
@enderror" name="description" value="{{ old('description')??$user->profile->description }}"  autocomplete="description">

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </div>
                    <div>
                    <label for="title" class="col-4 col-form-label ">URl</label>

                    <input id="url"
                           type="text" class="form-control @error('url') is-invalid @enderror"
                           name="url" value="{{ old('url') ??$user->profile->url}}"  autocomplete="url">

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    </div>
                </div>









                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">profile image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <strong >{{ $message }}</strong>

                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary ">save profile</button>
                </div>


            </div>

        </div>

    </form>


</div>


            @endsection
