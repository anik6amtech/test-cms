@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('pages') }} <span class="float-end"> <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button></span></div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">

                        <form action="{{route('createPage')}}" method="POST">
                            @csrf
                            <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title text-primary fw-normal"><i class="la la-lg la-file"></i> New page</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                            </button>
                          </div>

                          <div class="modal-body text">
                            <div class="mb-3 row" data-key="href">
                                 <label class="col-sm-3 col-form-label">Page Title</label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <input name="page_title" type="text" value="" class="form-control" placeholder="ex: my page" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row" data-key="href">
                                 <label class="col-sm-3 col-form-label">File name</label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <input name="file_name" type="text" value="" class="form-control" placeholder="ex: index" required="">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 row" data-key="href">
                                 <label class="col-sm-3 col-form-label">Save to folder</label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <input name="folder_name" type="text" value="" class="form-control" placeholder="/" required="">
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal"><i class="la la-times"></i> Cancel</button>
                            <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create page</button>
                          </div>
                        </div>

                       </form>

                      </div>
                </div>
                <div class="card-body">
                    <table class="table">

                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">theme_name</th>
                            <th scope="col">page_title</th>
                            <th scope="col">folder_name</th>
                            <th scope="col">File Name</th>
                            <th scope="col">action</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($pages as $page)

                            <tr>
                                <th scope="row">{{$page->id}}</th>
                                <td>{{$page->theme_name}}</td>
                                <td>{{$page->page_title}}</td>
                                <td>{{$page->folder_name}}</td>
                                <td>{{$page->file_name}}</td>

                                <td><a href="{{route('deletePage',$page->id)}}" class="btn btn-danger">&times;</a></td>
                                <td><a href="{{route('editPage',$page->id)}}" class="btn btn-info">edit</a></td>

                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
