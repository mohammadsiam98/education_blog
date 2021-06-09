@extends('layouts.user_layout')

@section('content')




<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            @include('alert.messages')
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                               
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Posts update table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start updating your blog posts</h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.users_blogs.update',$users_blogs->id)}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Blog Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="title" value="{{$users_blogs->title}}" id="simpleinput" class="form-control" placeholder="Write a catchy blog title">
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select category</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control selectpicker" name="category" data-style="btn-primary"  >
                                                               
                                                                <option value="{{$users_blogs->category}}" {{$users_blogs->id == $users_blogs->category ? 'selected' : ''}} >{{$users_blogs->category}}</option>
                                                                <option style="display: none;">Select a category</option>
                                                                <option value="politics">Politics</option>
                                                                <option value="fashion">Fashion</option>
                                                                <option value="travel">Travel</option>
                                                                <option value="gadget">Gadget</option>
                                                                <option value="business">Business</option>
                                                                <option value="sports">Sports</option>
                                                                <option value="lifestyle">Lifestyle</option>
                                                                <option value="internaional">International News</option>
                                                                <option value="gadget">Gadget</option>
                                                                <option value="specialnews">Special News</option>
                                                                <option value="coronavirus">Corona Virus</option>
                                                                <option value="bangladesh">Bangladesh</option>
                                                                <option value="world">World</option>
                                                                <option value="health">Health</option>
                                                                <option value="job">Job</option>
                                                                <option value="religion">Religion</option>

                                                            </select>                                                          
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter Your Product Description</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="description" class="form-control">{{$users_blogs->description }} </textarea>

                                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Highlighted Paragraph</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="highlightedText" rows="15" id="example-textarea" placeholder="Write a highlighted text for this blog">{{$users_blogs->highlightedText}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <p>Select an image</p>
                                                       
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
                                                        <img src="{{url($users_blogs->image)}}" class="img-thumbnail" style="height: 70px;width:auto;">
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                      
                        <!-- end row -->


                    

            
        </div> <!-- end container-fluid -->

    </div> <!-- end content -->

    

   

</div>

<section class="amidekhbo">

</section>






<script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/switchery/switchery.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace('my-editor', options);
    CKEDITOR.replace('my-editor2', options);
    CKEDITOR.replace('my-editor3', options);
</script>



@endsection

                