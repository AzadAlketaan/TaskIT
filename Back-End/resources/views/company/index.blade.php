@extends('layouts.app')

@section('content')
<h1>company</h1>
    <a href="/company/create" class="btn btn-default pull-right">New company</a>
<table class="table table-sm">
    <thead>
        <tr>
            <th>name</th> 
            
        </tr>
    </thead>
    <tbody>
    @foreach($company as $companys)
          <tr>
              
              <td> {{$companys->name}}  
              {!!Form::open(['action' => ['App\Http\Controllers\CompanyController@destroy', $companys->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
              {!!Form::close()!!}

              <a href="/company/{{$companys->id}}/edit" class="btn btn-default pull-right">Edit</a>
              <a href="/company/{{$companys->id}}" class="btn btn-default pull-right">Show</a>

              </td> 
             
          </tr>
         @endforeach
    </tbody>
</table>

@endsection