@extends('layouts.app')


@section('content')

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
                 <td class="text-center"><a href="listing/{{$listing->id}}">{{$listing->name}}</a></td>
                  
             </tr>
                 @endforeach
                 @else
                 <p>You have no listings</p>
             @endif
        </table>

@endsection