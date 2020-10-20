@extends('layouts.app')


@section('content')

        <h3>Your Listings</h3>
        <table class="table table-striped">
           <thead>
            <tr>
             <th>Company</th>
             <th>Address</th>
             <th>Website</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Biography</th>
             </tr>
             </thead>
             
             <tbody>
             
             <tr>
                 <td class="text-center">{{$listing->name}}</td>
                 <td class="text-center">{{$listing->address}}</td>
                 <td class="text-center">{{$listing->website}}</td>
                 <td class="text-center">{{$listing->email}}</td>
                 <td class="text-center">{{$listing->phone}}</td>
                 <td class="text-center">{{$listing->bio}}</td>
                  
             </tr>
               </tbody>  
             
        </table>

@endsection