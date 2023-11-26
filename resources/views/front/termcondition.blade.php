@extends('front.layout.front')
@section('title')
 Medical Appliances
@stop
@section('content')


<style>
.container_privacy{
	width: 80%;
	max-width: 92ch;
	margin: 4rem auto;
	line-height: 1.7;
}
.global-heading h2{
	margin-bottom: 3rem;
}
.global-heading p{
	font-family: unset !important;
}

.head_p{
	font-family: font-family: "REM", sans-serif !important;
	font-size: 18px !important;
	text-align: left;
	margin: 0 !important;

}
.department-part-main-box{
	margin-top: 1.4rem;
}

</style>

   <div class="departmentpg-main-box">
		<div class="container_privacy">
			<div class="global-heading">
				<h2>{{__('messages.Terms & Condition')}}</h2>
				<p class="head_p">{{__("messages.People should think things out fresh and not just accept conventional terms and the conventional way of doing things")}}</p>
			</div>
			<div class="department-part-main-box">
				<div class="row termsmar" style="color: #555">
					<?=html_entity_decode($setting->terms_condition)?>
				</div>
			</div>
		</div>
	</div>
@stop
