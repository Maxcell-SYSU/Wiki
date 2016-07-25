@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Information</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <p><strong>Fail!</strong></p>
                            <p>Reason:<br>
                            {!! implode('<br>', $errors->all()) !!}
                            </p>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" action="{{ url('information') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" required="required" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" required="required" placeholder="Enter e-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Year:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="year" value="Please select" required="required">
                                    <option>Please select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Campus:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="campus" value="Please select" required="required">
                                    <option>Please select</option>
                                    <option>East</option>
                                    <option>Zhuhai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Department:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="department" required="required" placeholder="Enter department">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="Enter phone (optional)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">WeChat ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="wechatId" placeholder="Enter WeChat ID (optional)">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
