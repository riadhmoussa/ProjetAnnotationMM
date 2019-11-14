<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Ajouter un nouveau document</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data_document.php" enctype="multipart/form-data">
							<fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nom de Fichier:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfilename" id="txtfilename" type="text" placeholder="Nom de fichier">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Document:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="resume" id="resume" type="file">
								</div>
							  </div>
							
							
							  <div class="form-actions">
								<button type="submit" name="SubmitBtn" id="SubmitBtn" onclick="return confirmAdd()" class="btn btn-primary">Ajouter</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->