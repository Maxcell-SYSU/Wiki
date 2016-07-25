@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">People Information</div>

                <div class="panel-body">
                    <div class="alert alert-info">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Use Ctrl+F to search.
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Year</th>
                              <th>Campus</th>
                              <th>Department</th>
                              <th>Phone</th>
                              <th>WeChat ID</th>
                              <th>Operation</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($information as $somebody)
                            <tr>
                              <td>{{ $somebody->name }}</td>
                              <td><a href="mailto:{{ $somebody->email }}">{{ $somebody->email }}</a></td>
                              <td>{{ $somebody->year }}</td>
                              <td>{{ $somebody->campus }}</td>
                              <td>{{ $somebody->department }}</td>
                              <td>{{ $somebody->phone }}</td>
                              <td>{{ $somebody->wechatId }}</td>
                              <td>
                                <div class="btn-group ">
                                  <a href="#" class="btn btn-primary">Edit</a>
                                  <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
