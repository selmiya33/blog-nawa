<div>
    <x-form.input type="text" value="{{ $articale->title }}" id="title" name="title" lable="Articale Title" />

    <x-form.textarea value="{{ $articale->description }}" id="description" name="description"
        lable="Articale Description" />

    <x-form.input type="text" value="{{ $articale->conclusion }}" id="conclusion" name="conclusion"
        lable="Articale conclusion" />

    <x-form.select :value="$articale->category_id" :options="$departments->pluck('name', 'id')" id="department_name" name="department_id"
        lable="Department name" />
    <div>
        <x-form.input type="file" value="{{ $articale->image }}" id="image" name="image" lable="Articale Image" />
        <a href="{{ $articale->image_link }}">
            <img src="{{ $articale->image_link }}" alt="{{ $articale->name }}" srcset="" high=120 width=100>
        </a>
    </div>
    <br>

    <button type="submit" class="btn btn-success">{{ $btn_submit ?? 'SAVE' }}</button>
</div>
