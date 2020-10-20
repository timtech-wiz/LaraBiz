@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a class="btn btn-success btn-xs" href="listing/create">Create Listing</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <div class="panel-body">
                        <h3>Your Listings</h3>
                         <table class="table table-striped">
                            <tr>
                             <th>Company</th>
                             <th></th>
                             <th></th>
                             </tr>
                             @if(count($listings) > 0)
                                @foreach($listings as $listing)
                             <tr>
                                 <td>{{$listing->name}}</td>
                                 <td><a href="listing/{{$listing->id}}/edit" class="btn btn-warning">Edit</a></td>
                                 
                                 <td>
                              {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST']) !!}
                               {{ Form::hidden('_method', 'DELETE') }}
                               {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    
                              {!! Form::close() !!}
                              </td>
                                 
                                 
                             </tr>
                                 @endforeach
                                 @else
                                 <p>You have no listings</p>
                             @endif
                         </table>
                     </div>

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
