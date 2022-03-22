 @extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <div class="row">
                        <h1>add new post</h1>
                    </div>

                    <label for="caption" class="col-md-4 col-form-label ">post caption</label>

                    <input id="caption"
                           type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">post image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                                        <strong >{{ $message }}</strong>

                    @enderror
                </div>
                <div class="row pt-4">
                        <button class="btn btn-primary ">submit post</button>
                </div>


            </div>

        </div>

    </form>
</div>
@endsection
