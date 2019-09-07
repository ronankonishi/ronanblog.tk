@extends('layouts.base')

@section('content')
	<div class="main portfolio">
		<h5>Resume:</h5>
		<hr>
		<div class="content">
			<p><a href="RESUME.pdf">Download my Resume</a></p>
		</div>
		<br>

		<h5>Coursework:</h5>
		<hr>
		<div class="content">
			<p>CSE 11. Introduction to Computer Science and Object-Oriented Programming: Java</p>
			<p>CSE 12. Basic Data Structures and Object-Oriented Design</p>
			<p>CSE 15L. Software Tools and Techniques Laboratory</p>
			<p>MATH 15A (CSE 20 equivalence). Introduction to Discrete Mathematics</p>
			<p>CSE 21. Mathematics for Algorithms and Systems</p>
			<p>CSE 30. Computer Organization and Systems Programming</p>
			<p>MATH 20A. Calculus for Science and Engineering</p>
			<p>MATH 20B. Calculus for Science and Engineering</p>
			<p>MATH 20C. Calculus and Analytic Geometry for Science and Engineering</p>
			<p>CSE 100. Advanced Data Structures (in progress)</p>
			<p>CSE 105. Theory of Computability (in progress)</p>
			<p>MATH 18. Linear Algebra (in progress)</p>
		</div>
		<br>


		<h5>Software Projects:</h5>
		<hr>
		<div class="content">
			@if($s_projects->count() > 0)
				@foreach ($s_projects as $project)
					<a href="/projects/{{$project->id}}">
						<div class="project" onmouseover="growParagraph()" onmouseout="shrinkParagraph()" style="background-color: blue;">
						<img src="/storage/image_attachments/{{$project->image_attachment}}">
						<p class="description"><b>{{$project->start_date}} - {{$project->end_date}}</b><br>{{$project->description}}</p>
						<p class="project-title">{{$project->title}}</p>
						</div>
					</a>
				@endforeach
			@else
				<p>Soon to Come...</p>
			@endif
		</div>
		<br>

		<h5>Engineering Projects:</h5>
		<hr>
		<div class="content">
			@if($e_projects->count() > 0)
				@foreach ($e_projects as $project)
					<a href="/projects/{{$project->id}}">
						<div class="project" onmouseover="growParagraph()" onmouseout="shrinkParagraph()" style="background-color: blue;">
						<img src="/storage/image_attachments/{{$project->image_attachment}}">
						<p class="description"><b>{{$project->start_date}} - {{$project->end_date}}</b><br>{{$project->description}}</p>
						<p class="project-title">{{$project->title}}</p>
						</div>
					</a>
				@endforeach
			@else
				<p>Soon to Come...</p>
			@endif
		</div>
		<br>

		<h5>Academic Research:</h5>
		<hr>
		<div class="content">
			@if($r_projects->count() > 0)
				@foreach ($r_projects as $project)
					<a href="/projects/{{$project->id}}">
						<div class="project" onmouseover="growParagraph()" onmouseout="shrinkParagraph()" style="background-color: blue;">
						<img src="/storage/image_attachments/{{$project->image_attachment}}">
						<p class="description"><b>{{$project->start_date}} - {{$project->end_date}}</b><br>{{$project->description}}</p>
						<p class="project-title">{{$project->title}}</p>
						</div>
					</a>
				@endforeach
			@else
				<p>Soon to Come...</p>
			@endif
		</div>
		<br>
	</div>
@endsection