<?php 
if(isset($_REQUEST['info'])){
if($_REQUEST['info']=='done')
	{echo '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>Operation completed successfully!!</div>';}
else if($_REQUEST['info']=='err')
	{echo '<div class="box-content alerts">
						<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">x</button>Operation failed!</div>';}
else if($_REQUEST['info'] == 'note')
{
echo '<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">x</button>
							Your ad already insert!
	</div>						';
}
}
?>
