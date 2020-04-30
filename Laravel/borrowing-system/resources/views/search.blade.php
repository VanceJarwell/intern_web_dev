@extends('layouts.master')

@section('content')
	<div class="w3-container" align="center">
	  <br>
	  <div class="w3-card-4" style="width:70%;">
	    <header class="w3-container w3-blue">
	      <h1>Search</h1>
	    </header>

	    <div class="w3-container" align="center">
	    	<div class="col-md-3 column">
              <!-- <span class="input-group-lg"> -->
                <select name="select_by">
                  <option value="all">Select By</option>
                  <option value="all">All</option>
                  <option value="bid">Book ID</option>
                  <option value="bname">Book Name</option>
                  <option value="category">Category</option>
                  <option value="publisher">Publisher</option>
                  <option value="author">Author</option>
                  <option value="year">Year</option>
                  <option value="price">Price</option>
                </select>
                <select name="order_by">
                  <option value="bname">Order By</option>
                  <option value="bname">All</option>
                  <option value="bid">Book ID</option>
                  <option value="bname">Book Name</option>
                  <option value="publisher">Publisher</option>
                  <option value="year">Year</option>
                  <option value="price">Price</option>
                </select>
              <!-- </span> -->
            </div>
			<form class="example" action="/action_page.php" style="margin:auto;max-width:300px" align="left">
			  <input type="text" placeholder="Search.." name="search2">
			  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
	    </div>

	    <footer class="w3-container w3-blue">
	      <h5>Copyright</h5>
	    </footer>
	  </div>
	</div>
@endsection