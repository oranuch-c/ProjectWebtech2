<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/bulma.css')}}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">
        <script src="http://bulma.io/javascript/jquery-2.2.0.min.js"></script>
        <script src="http://bulma.io/javascript/clipboard.min.js"></script>
        <script src="http://bulma.io/javascript/bulma.js"></script>
        <title>Create Voucher</title>



    </head>
    <body>
      <div class=" column is-11 ">
        <div class="content">

         <p>
           <a class="button is-danger  is-large modal-button" data-target="#modal-ter"><span><i class="fa fa-plus" aria-hidden="true"></i> Create Voucher</span></a>
         </p>
       </div>

        <div id="modal-ter" class="modal">
          <div class="" id="vue-add-promotion">
        <div class="modal-background"></div>
        <div class="modal-card" >
          <header class="modal-card-head">
           <p class="modal-card-title">Create Voucher</p>
           <button class="delete"></button>
          </header>
          <section class="modal-card-body">
           <div class="content">
             <form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="name">Voucher Name</label></th>
                      <td><input type="text" class="form-control ; input " name="name"  id="name" placeholder="" required>  </td>

                    </tr>
                  </table>
                </div>
                <!-- <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control"  id="img" name="img"  v-on:change="onFileChange" accept="image/*" required>
                </div> -->

                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="expdate">Exp Date</label></th>
                      <td><input type="date" class="form-control ; input " name="expdate" id="expdate"  placeholder="" required></td>
                    </tr>

                  </table>
                </div>
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="type">Discount Type</label></th>
                      <td ><select  class="form-control ; input " name="type"  id="type" required>
                           <option value="" disabled selected>Choose discount type</option>
                           <option value="percent" >Percent</option>
                           <option value="baht" >Baht</option>
                         </select></td>
                    </tr>
                  </table>

                </div>

                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:180px"><label for="total">Discount</label></th>
                      <td><input type="text" class="form-control ; input " name="total" id="total" placeholder="" required></td>
                    </tr>
                  </table>

                </div>
                <div class="form-group">
                  <table>
                    <tr>
                      <th style="width:600px"><label for="descript">Description</label></th>
                      <td> <textarea  class="form-control " rows="7" cols="60" name="descript" id="descript" placeholder="----description---" > </textarea></td>
                    </tr>
                  </table>


                </div>

            <button class="button is-primary btn-fill" type="submit">Add Voucher</button>

           </div>

          <!-- <footer class="modal-card-foot">
            <button class="btn btn-success btn-fill" type="submit">Add Promotions</button>
           <button class="button btn-primary" type="submit">Submit</button>
           <a class="button">Cancel</a>
          </footer> -->
            </section>
            </form>

          </div>




</div>

        </div>

        <div class="message is-grey">
          <div class="message-header">
            Voucher details
          </div>
        <div class="message-body" id="vue-app">

          <table class="table">
            <thead>
              <tr>
                <th style="width:100px"><abbr>ID</abbr></th>
                <th style="width:150px"><abbr>Voucher name</abbr></th>
                <th style="width:130px"><abbr>Expiration date</abbr></th>
                <th style="width:60px"><abbr>Discount</abbr></th>
                <th style="width:150px"><abbr>Discount Type</abbr></th>
                <th ><abbr>Description</abbr></th>

              </tr>
            </thead>
            <tbody>
                            <tr v-for="d in data">
                                <td>@{{ d.id }}</td>
                                <td>@{{ d.name }}</td>
                                <td>@{{ d.expDate }}</td>
                                <td>@{{ d.dc }}</td>
                                <td>@{{ d.dcType }}</td>
                                <td>@{{ d.descript }}</td>
                            </tr>
                          </tbody>
          </table>
        </div>
      </div>


      </div>


    </body>
</html>
