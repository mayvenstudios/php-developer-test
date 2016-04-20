@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add People</div>

                <div class="panel-body">
                    <div id="peopleContainer">
                    	<form method="POST" v-on="submit: onSubmitForm">
                            <div class="form-group">
                                <label for="name">
                                    Name:
                                    <span class="error" v-if="! newPeople.name">*</span>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" v-model="newPeople.name">
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email:
                                    <span class="error" v-if="! newPeople.email">*</span>
                                </label>
                                <input type="text" name="email" id="email" class="form-control" v-model="newPeople.email">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default" v-attr="disabled: errors">
                                    Add
                                </button>
                            </div>

                            <div class="alert alert-success" v-if="submitted">Added Successfully!</div>
                        </form>
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