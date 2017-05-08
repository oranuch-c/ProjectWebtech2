@extends('layouts.master')

@section('content')
<h1 class="title">All Books</h1>
<div class="row">

   <div class="col-md-12">
        <div class="panel panel-default" id="vue-app">
            <div class="panel-heading">
                Data Render By Blade
            </div>
            <div class="panel-body">
                <p>Status Code: {{ $statusCode }}</p>
                <p>Response Header: {{ $responseHeader }}</p>
                Success <label class="label label-success">{{ $success }}</label>
            </div>
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
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>{{ $d->status }}</td>
                        <td>{{ $d->price }}</td>
                        <td>{{ $d->author }}</td>
                        <td>{{ $d->year }}</td>
                        <td>{{ $d->pageSize }}</td>
                        <td>{{ $d->publishComp }}</td>
                        <td style="width: 10%"><img style="width: 100%" src= "{{ asset('img/'.$d->img) }}"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default" id="json-beautifier">
            <div class="panel-heading">
                JSON Response
            </div>
            <div class="panel-body">
                <pre>@{{json}}</pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default" id="vue-app-titles">
            <div class="panel-heading">
                Data Render By VueJS
            </div>
            <div class="panel-body">
                Success <label class="label label-success">@{{ success }}</label>
            </div>
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
                        <td>@{{ d.id }}</td>
                        <td>@{{ d.name }}</td>
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
    </div>

</div>

@endsection

@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vjson = new Vue({
        el: '#json-beautifier',
        data: data,
        computed: {
            json: function(){
                return JSON.stringify(this.data, null, 2);
            }
        }
    });

    var vm = new Vue({
        el: '#vue-app-titles',
        data: data
    });
</script>
@endsection
