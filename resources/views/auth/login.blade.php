@extends('app')

@section('content')
<div class="container-fluid">
  <div class="padding-5"></div>
	<div class="row">
		<div class="col-md-6 col-md-offset-1">
			<div class="panel panel-default login-panel box">
				<div class="panel-heading">登陆</div>
				<div class="panel-body">
          <div class="padding-5"></div>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>出错了!</strong> 您的输入有误！<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">企业邮箱</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">密码</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> 记住账号
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">登陆</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">忘记密码</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    <div class="col-md-4">
      <div class="login-intro box">

      </div>
    </div>
	</div>
</div>
@endsection
