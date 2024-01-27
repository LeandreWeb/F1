<form method="GET">
    <select  name="year_id" onchange="this.form.submit()" >
        @foreach($seasons as $season)
            <option @if ($season->id == request()->query("year_id")) selected

            @endif value="{{$season->id}}">{{$season->id}}</option>
        @endforeach
    </select>
</form>

