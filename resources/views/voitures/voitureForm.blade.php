<div class="info-content">
    <div class="voitureForm-content">
        @if ($message = Session::get('succes'))
            <strong>{{ $message }}</strong>
        @endif
        <div class="createForm-form-content">
            <form action="{{ route('storeVoiture') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="voiture-form-content">
                    <div class="input-field">
                        <h2>Add a Car</h2>
                    </div>

                    <div class="input-field">
                        <input type="text" name="name" id="" placeholder="enter voiture name"
                            value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span>{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="text" name="color" id="" placeholder="enter  color"
                            value="{{ old('color') }}">

                        @if ($errors->has('color'))
                            <span>{{ $errors->first('color') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="text" name="price" id="" placeholder="enter price"
                            value="{{ old('price') }}">

                        @if ($errors->has('price'))
                            <span>{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="text" name="description" id="" placeholder="enter description"
                            value="{{ old('description') }}">

                        @if ($errors->has('description'))
                            <span>{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="file" name="images[]" multiple id="" value="{{ old('images') }}">
                        @if ($errors->has('images'))
                            <span>{{ $errors->first('images') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <select name="id_categorie" id="">
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field">
                        <input type="submit" value="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
