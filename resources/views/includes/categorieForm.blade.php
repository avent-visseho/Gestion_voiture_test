<div class="info-content">
    <div class="categorieForm-content">
        @if ($message = Session::get('succes'))
            <strong>{{ $message }}</strong>
        @endif
        <div class="createForm-form-content">
            <form action="{{ route('storeCategorie') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="categorie-form-content">
                    <div class="input-field">
                        <input type="text" name="name" id="" placeholder="enter Product Name"
                            value="{{ old('name') }}">
                    </div>
                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                    <div class="input-field">
                        <input type="submit" value="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
