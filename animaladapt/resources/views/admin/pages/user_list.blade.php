@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">User  List</div>
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
                                        <th>Email</th>
                                        
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($User as $datas)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$datas->name}}</td>
                             
                                {{-- <td><img src="{{ asset($datas->image) }}" height="50" width="50" >   </td> --}}

                                <td>{{$datas->email}}</td>
                                <td>
                                    {{-- @if($datas->status==1)
                                    <a href="{{route('category_status_update',['id'=>$datas->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($datas->branch_status==0)
                                    <a href="{{route('category_status_update',['id'=>$datas->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif --}}
    
                                <a href="{{  url('//'.$datas->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                    <span class="fa fa-trash font-14  "></span> </a>
                                </td>
                            
                           
                            
                   
                          
                           
                            
    
                            </tr>
        
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>





@endsection
