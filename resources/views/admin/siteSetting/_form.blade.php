<div>
    <x-form.input type="text" value="{{ $site->name }}" id="name" name="name" lable="webSite Name" />

    <div>
        <x-form.input type="file" value="{{ $site->image }}" id="icon" name="icon" lable="webSite icon" />
        <a href="{{ $site->image_icon  }}">
            <img src="{{ $site->image_icon  }}" alt="{{ $site->name }}" srcset="" high=120 width=100>
        </a>
    </div>
    <br>

    <button type="submit" class="btn btn-success">{{ $btn_submit ?? 'SAVE' }}</button>
</div>
