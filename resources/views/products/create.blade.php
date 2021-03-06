<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
    <div class="container-md">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Product</h2>
                </div>
            </div>
        </div>

        <form id="demoForm" action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                    <div class="form-group">
                        <strong>Name</strong>
                        <label>
                            <input class="input @error('name') is-danger @enderror"
                                   type="text"
                                   name="name"
                                   placeholder="Fill in the name here"
                                   value="{{ old('name') }}">
                        </label>
                    </div>
                </div>

                @error('name')
                <p class="help is-danger">{{ $errors->first('name') }}</p>
                @enderror

                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                    <div class="form-group">
                        <strong>Detail</strong>
                        <label>
                            <textarea class="input @error('detail') is-danger @enderror"
                                      style="height:130px"
                                      name="detail"
                                      placeholder="Fill in the details of the product here"
                                      value="{{ old('detail') }}"></textarea>
                        </label>
                    </div>
                </div>

                @error('detail')
                <p class="help is-danger"> {{ $errors->first('detail') }}</p>
                @enderror

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
