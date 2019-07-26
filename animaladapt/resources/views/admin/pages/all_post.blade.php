@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">All Post List</div>
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
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Gender</th>
                                        <th>User</th>
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($AdaptPost as $datas)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$datas->title}}</td>
                                <td>
                                    @foreach ($category as $item)
                                        @if($datas->category==$item->id)
                                        {{$item->category_name}}
                                    @endif
                                    @endforeach
                                    {{-- {{$datas->category}} --}}
                                </td>
                                <td><img src="{{ asset($datas->image) }}" height="50" width="50" >
                                </td>
                                
                                <td>{{$datas->gender}}</td>
                                <td>@foreach ($user as $item)
                                    @if($datas->user_id==$item->id)
                                    {{$item->name}}
                                @endif
                                @endforeach
                            </td>
                            
                            
        
        
                                <td>
                                  
                              
                                    <a href="{{  url('/mypost/delete/'.$datas->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
                                    </a>
        
                                </td>
                            </tr>
        
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>





@endsection
