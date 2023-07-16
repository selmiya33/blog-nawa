<div>
    <x-form.input type="text" value="{{ $department->name }}" id="name" name="name" lable="Department Name" />

    <x-form.input type="text" value="{{ $department->description }}" id="description" name="description" lable="Department Description" />

    <div>
        <x-form.input type="file" value="{{ $department->image }}" id="image" name="image" lable="Department Image" />
        <a href="{{ $department->image_link }}">
            <img src="{{ $department->image_link }}" alt="{{ $department->name }}" srcset="" high=120 width=100>
        </a>
    </div>
    <br>

    <button type="submit" class="btn btn-success">{{ $btn_submit ?? 'SAVE' }}</button>
</div>
