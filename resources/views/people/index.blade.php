@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{ url('/people/create') }}" class="btn btn-default pull-right">Add</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">People List</div>

                <div class="panel-body">
                    <div id="peopleContainer">
                    	<table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-repeat="peoplelist">
                                    <td><a href="/people/@{{ id }}">@{{ name }}</a></td>
                                    <td>@{{ email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-sm">Connect</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="/js/people.js"></script>
@endsection