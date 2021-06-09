@extends('layouts.user_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
         
          

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Post Category</th>
                    <th style="text-align: center;">Title</th>
                    <th style="text-align: center;">Image</th>
                    
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($users_blogs)>0)
            @foreach ($users_blogs as $blog)
                <tr>
                   
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->category}}</td>
                    <td>{{$blog->title}}</td>
                   
                    <td>
                        <img style="height: 70px; width:auto;" src="{{url($blog->image)}}" alt="image">
                          
                    </td>

                    <td>
                        <div class="row">
                         
                          <div >
                            <form action="{{route('admin.users_blogs.restoreData', $blog->id)}}" method="GET">
                              @csrf
                             
                              <input type="submit" name="submit" value="Restore Data" class="btn btn-danger m-2">
                            </form>
                            
                          </div>
                        </div>
                      </td>
                  
                </tr>

            @endforeach                    
            @endif
               
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection