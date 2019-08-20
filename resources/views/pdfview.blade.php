<style type="text/css">
	table td, table th{
		border:1px solid black;
	}
</style>
<div class="container">


	<br/>
	<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>


	<table>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
		
		<tr>
			<td> {{ $user -> id }} </td>
			<td> {{ $user -> first_name }} </td>
		</tr>
	
	</table>
</div>