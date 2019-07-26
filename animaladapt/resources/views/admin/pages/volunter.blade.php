@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">All Volunter List List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Create Post
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Adress</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        {{-- <th>Action</th> --}}
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($Volunteer as $datas)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$datas->first_name}}&nbsp{{$datas->last_name}}</td>
                             
                                <td><img src="{{ asset($datas->image) }}" height="50" width="50" >   </td>

                                <td>{{$datas->address}}</td>
                                
                                <td>{{$datas->email}}</td>
                                <td>{{$datas->phone}}</td>
                          
                           
                            
    
                            </tr>
        
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>





@endsection
