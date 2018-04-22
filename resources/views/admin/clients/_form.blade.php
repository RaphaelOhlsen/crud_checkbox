{{ csrf_field() }}
@php
    if($client->name == '')
    {
     $selected_languages=array();
    }
@endphp
<div class="form-group">
    <label for="name">Nome</label>
    <input class="form-control" id="name" name="name" value="{{ old('name', $client->name) }}">
</div>

<div class="form-group">
    <label>Linguas</label>
    <div class="checkbox">
        @foreach($languages as $language)
             <label>
                <input id="languages" name="checked_language[]" value="{{$language->id}}" type="checkbox"
                        {{in_array($language->id, $selected_languages ) == 1 ? 'checked="checked"' : ''}}>{{$language->name}}
            </label>
            <br>
        @endforeach
    </div>
</div>











