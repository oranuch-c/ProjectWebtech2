


  @include('layouts._head')
<body>
  @include('layouts._nav')
  <div id="mainBody">
  	<div class="container">
  	<div class="row">
  @include('layouts._sidebar')

  <div class="span9">
    <div class="well well-small">
      <div class="row-fluid">
      <table class="table">
        <thead>
          <tr>
            <th>User_ID</th>
            <th>Book_ID</th>
            <th>Loan Date</th>
            <th>Returned Date</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($loan as $l)
          <tr>
            <td>{{ $l->user_id }}</td>
            <td>{{ $l->book_id }}</td>
            <td>{{ $l->loan_date }}</td>
            <td>{{ $l->returned_date }}</td>
            <td>{{ $l->total }}</td>
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

    @include('layouts._footer')
 <!-- Placed at the end of the document so the pages load faster ============================================= -->
 	 @include('layouts._script')
 </body>
