@extends('layouts.master')

@section('content')
<h1>Search Book</h1>
<div class="" id="vue-app">
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Book Name</label>
            <input type="text" class="form-control" v-model="name" id="name" placeholder="Book Name">

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    ค้นหา
            <span class="caret"></span>
            </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="http://projectwebtech2.dev/api/titles/รักเปื้อนร้าย">ชื่อหนังสือ</a></li>
        <li><a href="#">หมวดหมู่</a></li>
        <li><a href="#">ชื่อผู้แต่ง</a></li>
        </ul>
        <button class="btn btn-primary" v-on:click="submit()">Search</button>
    </div>

    </div>
        </div>
 


       
    
</div>

<!-- <div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" v-model="name" id="name" placeholder="Book Name">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
      <button class="btn btn-primary" v-on:click="submit()">Search</button>
    </div>
        </div>
    </div>
</div> -->



<div class="row">
    <div class="col-md-12">
        <!-- <div class="panel panel-default" id="vue-app-singers"> -->
            <div class="panel-heading">
                Data Render By VueJS
            </div>
<!--             <div class="panel-body">
                Success <label class="label label-success">@{{ success }}</label>
            </div> -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Page</th>
                        <th>Publish Company</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="d in data">
                        <td>@{{ d.book_id }}</td>
                        <td>@{{ d.book_name }}</td>
                        <td>@{{ d.status }}</td>
                        <td>@{{ d.price }}</td>
                        <td>@{{ d.author }}</td>
                        <td>@{{ d.year }}</td>
                        <td>@{{ d.pageSize }}</td>
                        <td>@{{ d.publishComp }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- </div> -->
</div>
@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var vm = new Vue({
    el: '#vue-app',
    data: {
        'name': ''
    },
    methods: {
        submit: function () {
            axios.get('http://projectwebtech2.dev/api/titles/'+this.name, {
                name: this.name
            }).then(function (response) {
                console.log(response.data.data);
                data = response.data.data;
                vm.name = '';
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
        }
    }
});

$('.dropdown-toggle').dropdown()
</script>
@endsection
