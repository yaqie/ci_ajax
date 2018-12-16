<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Barang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Barang</small>
            </h1>
        </div>
	<div class="row">
		<table class="table table-striped" id="mydata">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Nama Barang</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_barang();	//pemanggilan fungsi tampil barang.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil barang
		function tampil_data_barang(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>index.php/barang/data_barang',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].barang_kode+'</td>'+
		                        '<td>'+data[i].barang_nama+'</td>'+
		                        '<td>'+data[i].barang_harga+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

	});

</script>
</body>
</html>