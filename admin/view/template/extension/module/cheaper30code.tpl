<?php echo $header; ?><?php echo $column_left; ?>
	<div id="content">
	   <div class="page-header">
		<div class="container-fluid">
		  <div class="pull-right">
			<button type="submit" form="form" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
			<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
		  <h1><?php echo $heading_title; ?></h1>
		  <ul class="breadcrumb">
			<?php foreach ($breadcrumbs as $breadcrumb){ ?>
			<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
			<?php } ?>
		  </ul>
		</div>
	  </div>
	  <div class="container-fluid">
		<?php if ($error_warning){ ?>
		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
		<?php } ?>
		<?php if (isset($success)){ ?>
		<div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
		<?php } ?>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
		  </div>
		  <div class="panel-body">
		  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 text-right"><?php echo $protection_txt; ?></label>
				<div class="col-sm-10">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-key"></i></button>
						</div>
						<input type="text" class="form-control" name="cheaper30_code" value="<?php if (isset($cheaper30_code)){ ?><?php echo $cheaper30_code; ?><?php } ?>" size="30" placeholder="<?php echo $text_protection_help; ?>" style="height: 37px !important;" />
					</div>	
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<span style="font-weight: normal;"><?php echo $help_protection; ?></span>
				</div>
			</div>
		  </form>
		  </div>
		</div>
	  </div>
	</div>
	<style>
		#form .input-group-btn > .btn {
			height: 37px;
		}
	</style>
  <?php echo $footer; ?>