<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><script src="<?php echo base_url();?>assets/js/views/users.js"></script>
<script>
functions.push(function(){
	dt = $("#data").dataTable({
        "sorting": [[0, "asc" ]],
        "processing": true,
        "serverSide": true,
        "ajax": {
	        "url": base_url+'users/get',
	        "type": "POST",
	        "data": function(d){
	        	d.ci3csrf = $.cookie('ci3csrf');
	        }
        },
        // "dom": '<"top"iflp<"clear">>rt' ,
        "columns": [
							{
								"data": "username",
								"title": "Username",
								"width": '30%'
							},
            	{
            		"data": "fullname",
            		"title": "Name",
            		"width": '35%'
            	},
            	{
            		"data": "status",
            		"title": "Status",
            		"width": '10%'
            	},
            	{
            		"data": "lastlogin",
            		"title": "Last Login",
            		"width": '10%'
            	},
            	{
            		"data": "action",
            		"title": "",
            		"sortable": false,
            		"width": '15%'
            	}
        ]});
});
</script>

<div class="p20">
	<h1>Users</h1>
	<div class="mb20">
		<a data-toggle="modal" href="#addForm" class="btn btn-primary" id="btnAdd"><strong>+</strong> Add</a>
</div>
<div class="travel-table">
	<table class="table table-striped table-hover vertical-middle class dataTable" id="data">
	</table>
</div>

<div id="addForm" class="modal fade" tabindex="-1" data-width="480" style="display: none;" data-focus-on="input:first" >
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    	<h2 class="modal-title">Add Users</h2>
	</div>
	<div class="modal-body">
	    <form role="form" class="parsley-validate ajax" action="<?php echo site_url('admin/users/process');?>" done="confirmAgain()" clearform>
				<input type="hidden" name="id" value="new" />
				<div class="row">
					<div class="col-md-12">
		        <div class="form-group">
		            <label for="name">Name:</label>
		            <input type="text" id="name" name="name" class="form-control" required/>
		        </div>
		        <div class="form-group">
		            <label for="username">Username:</label>
		            <input type="text" id="username" name="username" class="form-control" required data-parsley-type="email"/>
		        </div>
		        <div class="form-group">
		            <label for="password">Password:</label>
		            <input type="password" id="password" name="password" class="form-control" required/>
		        </div>
		        <div class="form-group">
		            <label for="confirm">Confirm:</label>
		            <input type="password" id="confirm" name="confirm" class="form-control" required data-parsley-equalto="#password"/>
		        </div>
					</div>
				</div>
			</form>
	</div>
	 <div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	</div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>