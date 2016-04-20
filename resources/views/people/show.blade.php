@extends('layouts.app')

@section('content')
<!-- item template -->
<script type="text/x-template" id="item-template">
  <div v-class="bold: isFolder"
    v-on="click: toggle, dblclick: changeType">
    {{$people->name}}
    <span v-if="isFolder">[@{{open ? '-' : '+'}}]</span>
  </div>
  <ul v-show="open" v-if="isFolder">
    <li class="item"
      v-repeat="model: model.children"
      v-component="item">
    </li>
    <li v-on="click: addChild">+</li>
  </ul>
</script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">People Family</div>

                <div class="panel-body">
                    <ul id="demo">
                      <li class="item"
                        v-component="item"
                        v-with="model: treeData">
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="/js/tree.js"></script>
@endsection