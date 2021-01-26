@extends('cars.base')
@section('content')
<body class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="title">CARS List</h1>   
            <div class="col-sm-12" class="successul">
              @if(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}  
                </div>
              @endif
            </div>
            <a href="cars/create" class="btn btn-primary mb-2">Add New</a> 
          <table class="table table-striped" id="data">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Model</td>
                  <td>Make</td>
                  <td>Produced On</td>
                  <td>Color</td>
                  <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
              @foreach($car as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->make}}</td>
                    <td>{{$car->produced_on}}</td>
                    <td>{{$car->colors->name}}</td>
                    <td style="display: flex">
                        <a href="{{ route('cars.show',$car->id)}}" class="btn btn-success">Detail</a>
                        <a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary ml-2">Edit</a>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger ml-2" type="submit">Delete</button>
                        </form>
                      </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        <div>
        </div>
</body>
<script>
  $(function(){
    setTimeout(timer, 3000);
    function timer(){
      $('.alert').slideUp();
    };
  })


</script>

@endsection