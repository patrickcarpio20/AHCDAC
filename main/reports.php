<link rel="stylesheet" type="text/css" href="../dist/DataTable/datatables.css">

<div class="row">
    <table id="table-report" class="display" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2" style="text-align: center;">DATE/TIME</th>
                <th colspan="2" style="text-align: center;">MAPUTI</th>
                <th colspan="2" style="text-align: center;">TALAGUIO</th>
                <th colspan="2" style="text-align: center;">MATULID</th>
                <th colspan="3" style="text-align: center;">ANGAT</th>
                
            </tr>
            <tr>
                <th>HOURLY</th>
                <th>DAILY</th>
                <th>HOURLY</th>
                <th>DAILY</th>
                <th>HOURLY</th>
                <th>DAILY</th>
                <th>HOURLY</th>
                <th>DAILY</th>
                <th>RWL</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	for($i=0;$i<500;$i++){
        	?>
            <tr>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
            </tr>
           <?php
	       }
	       ?>
        </tbody>
        
    </table>
</div>


<script type="text/javascript">
	$(document).ready( function () {
		$('#example').DataTable();

	    $('#table-report').DataTable({
	    	"searching": false,
	    	"autoWidth": false,
	    	"lengthChange": false,
	    	"pageLength": 12,
	    });
	});
</script>