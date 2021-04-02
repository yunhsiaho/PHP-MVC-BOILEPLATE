<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/InvoicesManager.php';

?>
<div class="container">
<h1>Welcome to the COGIP</h1>

<h3>Invoices</h3>
	<hr/>
	<table>
		<tr>
		<th>Invoice number</th>
		<th>Invoice date</th>
		<th>Company name</th>
		</tr>
		
		<?php
		$x=0;
		
		$invoices= new InvoicesManager();

		foreach ($invoices->getInvoices() as $invoice) { 
			if ($x>=20)
			break;?>

			<tr>
			<td><?php echo $invoice['invoice_num']?></td>
			<td><?php echo $invoice['invoice_date']?></td>
			<td><?php echo $invoice['comp_name']?></td>
			<td><button>more</button></td>
			<td><button>edit</button></td>
			</tr>
		<?php
			$x++; } 
			?>
		</table>
	<?php require 'includes/footer.php'?>
</div>       