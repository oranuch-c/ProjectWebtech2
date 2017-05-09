<!DOCTYPE html>
<html lang="en">
    @include('layouts._head')
<body>
    @include('layouts._nav')


<h1 class="title">All Books</h1>
<div class="row">

   <div class="col-lg-12 margin-tb">
        <div class="span20 " id="vue-app">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-promotion">
          <span class="glyphicon-plus"></span>
                  Add Book
                </button>
                </div>
            </div>
        </div>
        <!-- Create Item Modal -->
        <div class="modal fade" id="create-promotion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Book</h4>
              </div>
              <div class="modal-body span10">

                    <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createPromotion">

                        <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" v-model="newPromotion.title" />

                        <label for="author">Author:</label>
                        <input type="text" name="author" class="form-control" v-model="newPromotion.author" />

                        <label for="date">Date:</label>
                        <input type="date" name="date" class="form-control" v-model="newPromotion.date" />

                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" v-model="newPromotion.description"></textarea>

                        <label for="price">Price:</label>
                        <input type="text" name="price" class="form-control" v-model="newPromotion.price" />

                        <label for="publish">Publisher:</label>
                        <input type="text" name="publish" class="form-control" v-model="newPromotion.publish" />

                        <label for="size">Page size:</label>
                        <input type="text" name="size" class="form-control" v-model="newPromotion.size" />

                        <!-- <span v-if="formErrors['title']" class="error text-danger">@{{ formErrors['title'] }}</span> -->
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                    </form>


              </div>
            </div>
          </div>
        </div>

            <div class="panel-heading ">
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
                        <th >ID</th>
                        <th >Name</th>
                        
                        <th >Status</th>
                        <th >Price</th>
                        <th >Author</th>
                        <th >Year</th>
                        <th >Page</th>
                        <th >Publish Company</th>
                        <th >Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td style="width: 15%"">{{ $d->name }}</td>

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


<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
    @include('layouts._footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    @include('layouts._script')

</body>
</html>

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
