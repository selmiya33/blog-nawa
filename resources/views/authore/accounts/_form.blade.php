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
    <div class="col-md-8">
        <x-form.input type="text" value="{{ $account->platform }}" id="platform" name="platform"
            lable="account platform" />
        <x-form.error name="platform" />

        <x-form.input type="text" value="{{ $account->Link }}" id="Link" name="Link" lable="account Link" />
        <x-form.error name="Link" />

        <x-form.input type="text" value="{{ $account->Link }}" id="icon" name="icon" lable="account icon" />
            <small>This website help you: https://fontawesome.com </small>
        <x-form.error name="icon" />

        <br>

        <button type="submit" class="btn btn-success">{{ $btn_submit ?? 'SAVE' }}</button>
    </div>
