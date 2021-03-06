<script src="{base_url()}assets/js/views/services.js"></script>
<script>
functions.push(function(){
	dt = $("#data").dataTable({
        "sorting": [[0, "asc" ]],
        "processing": true,
        "serverSide": true,
        "ajax": {
	        "url": base_url+'services/get',
	        "type": "POST",
	        "data": function(d){
	        	d.ci3csrf = $.cookie('ci3csrf');
	        }
        },
        // "dom": '<"top"iflp<"clear">>rt' ,
        "columns": [
				{
					"data": "services_name",
					"title": "Jasa",
					"width": '50%'
				},
            	{
            		"data": "services_category_name",
            		"title": "Kategori",
            		"width": '40%'
            	},
            	{
            		"data": "action_edit",
            		"title": "",
            		"sortable": false,
            		"width": '5%'
            	},
            	{
            		"data": "action_delete",
            		"title": "",
            		"sortable": false,
            		"width": '5%'
            	}
        ]});

});
</script>

<div class="p20">
	<h1>Jasa</h1>
	<div class="mb20">
		<a data-toggle="modal" href="#addForm" class="btn btn-primary" id="btnAdd"><strong>+</strong> Add</a>
</div>
<div class="travel-table">
	<table class="table table-striped table-hover vertical-middle class dataTable" id="data">
	</table>
</div>

<div id="addForm" class="modal fade" tabindex="-1" data-width="430" style="display: none;" data-focus-on="input:first" >
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    	<h2 class="modal-title">Add Jasa</h2>
	</div>
	<div class="modal-body">
	    <form role="form" class="parsley-validate ajax" action="{site_url('admin/services/process')}" done="confirmAgain()" clearform>
				<input type="hidden" name="id" value="new" />
				<input type="hidden" name="user_id" value="" />
				<div class="row">
					<div class="col-md-12">
				        <div class="form-group">
				            <label for="services_name">Nama Jasa:</label>
				            <input type="text" id="services_name" name="services_name" class="form-control" required/>
				        </div>
				        <div class="form-group">
				            <label for="services_category_id">Kategori:</label>
				            <select class="chosen-select" name="services_category_id" id="services_category_id">
		                        <option value="0"></option>
					            {foreach $categories val}
								  	<option value="{$val->services_category_id}">{$val->services_category_name}</option>
								{/foreach}
		                    </select>
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
