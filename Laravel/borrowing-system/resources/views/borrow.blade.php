@extends('layouts.master')

@section('content')
	<div class="w3-container"  align="center">
	  <br>
	  <div class="w3-card-4" style="width:70%;">
	    <header class="w3-container w3-blue">
	      <h1>Borrow</h1>
	    </header>

	    <div class="w3-container">
			<form class="example" action="/action_page.php" style="margin:auto;max-width:300px" align="left">
			  <input type="text" placeholder="Input item ID here" name="search2">
			  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<form class="example" action="/action_page.php" style="margin:auto;max-width:300px" align="left">
			  <input type="text" placeholder="Item Name" name="search2">
			</form>
			<form class="example" action="/action_page.php" style="margin:auto;max-width:300px" align="left">
			  <input type="text" placeholder="Input Borrowers ID here" name="search2">
			</form>

			<button class="button">Submit</button>
	    </div>
		<br>
	    <footer class="w3-container w3-blue">
	      <h5>Copyright</h5>
	    </footer>
	  </div>
	</div>
@endsection