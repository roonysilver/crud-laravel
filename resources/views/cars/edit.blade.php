@extends('cars.base')
<title>edit Car</title>
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Edit a Car</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cars.update', $car->id) }}">
          @method('PATCH')
          @csrf
          <div class="form-group">    
              <label for="model">Model:</label>
              <input type="text" class="form-control" name="model" value="{{ $car->model }}"/>
          </div>

          <div class="form-group">
              <label for="make">Make:</label>
              <input type="text" class="form-control" name="make" value="{{ $car->make }}"/>
          </div>

          <div class="form-group">
              <label for="produced_on">Date:</label>
              <input id="date" type="text" class="form-control date" name="produced_on" value="{{ $car->produced_on }}"/>
          </div>
          <div class="form-group">
            <label for="color">Color:</label>
            <select id="color" type="text" class="form-control color" name="color">
              @foreach ($color as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/cars" class="btn btn-danger">Back</a>
      </form>
  </div>
</div>
</div>
<script>
    $(function() {
  $('.date').datepicker({
      dateFormat: 'yy-mm-dd'
  });
  
});
</script>
@endsection