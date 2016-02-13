<!-- quick email widget -->
<div class="box box-info">
	<div class="box-header">
		<i class="fa fa-envelope"></i>
		<h3 class="box-title">Write to us!!!</h3>
		<!-- tools box -->
		<!-- <div class="pull-right box-tools">
		<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
		<i class="fa fa-times"></i>
		</button>
		</div> --><!-- /. tools -->
	</div>
	<div class="box-body">
		<form action="/email/home" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input type="email" class="form-control" name="emailto" id="emailto" placeholder="Email to:" value="support@aftercares.in" disabled>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
			</div>
			<div>
				<textarea class="textarea" name="mailcontent" id="mailcontent" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
			</div>
			<div class="box-footer clearfix">
				<button type="submit"  class="pull-right btn btn-default" id="sendEmailDashboard">
					Send <i class="fa fa-arrow-circle-right"></i>
				</button>
			</div>
		</form>
	</div>
</div>



