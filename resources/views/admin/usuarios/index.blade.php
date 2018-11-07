@extends('admin.layout')
@section('content')
<div id="app2">
  @{{ message }}
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script>
  new Vue({
    el: '#app2',
    data: {
      message: "hola mundo"
    }
  });
</script>
@stop
