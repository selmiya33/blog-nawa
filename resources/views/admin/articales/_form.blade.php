@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-md-6">
        <x-form.input type="text" value="{{ $articale->title }}" id="title" name="title" lable="Articale Title" />

        <x-form.textarea value="{{ $articale->description }}" id="description" name="description"
            lable="Articale Description" />

        <x-form.input type="text" value="{{ $articale->conclusion }}" id="conclusion" name="conclusion"
            lable="Articale conclusion" />


        <x-form.select :value="$articale->department_id" :options="$departments->pluck('name', 'id')" id="department_name" name="department_id"
            lable="Department name" />
    </div>
    <div class="col-md-6">
        <div>
            <x-form.input type="file" value="{{ $articale->image }}" id="image" name="image"
                lable="Articale Image" />
            <a href="{{ $articale->image_link }}">
                <img src="{{ $articale->image_link }}" alt="{{ $articale->name }}" srcset="" high=120 width=100>
            </a>
        </div>
        <label for="image">gallery</label>
        <div>
            <input type="file" class="form-control" id="gallery" name="gallery[]" multiple placeholder="gallery">
        </div>
        @if ($gallery ?? false)
            <div class="row">
                @foreach ($gallery as $image)
                    <div class="col-md-3">
                        <img src="{{ $image->image_link }}" class="img-fluid" high=100 width=100>

                        <button type="button" class="close position-absolute top-0 end-0" aria-label="Close">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        @endif

        <x-form.error name="gallery" />
        <br>

        <button type="submit" class="btn btn-success">{{ $btn_submit ?? 'SAVE' }}</button>
    </div>
