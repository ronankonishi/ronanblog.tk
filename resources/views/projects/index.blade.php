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
			<a href="">
				<div class="project" onmouseover="growParagraph()" onmouseout="shrinkParagraph()" style="background-color: blue;">
				<img src="img/back.jpg">
				<p class="description"><b>2018-2019</b><br>Tricorder database for competition</p>
				<p class="project-title">Tricorder</p>

				</div>
			</a>
		</div>
		<br>

		<h5>Engineering Projects:</h5>
		<hr>
		<div class="content">
			<p>Soon to Come...</p>
		</div>
		<br>

		<h5>Academic Research:</h5>
		<hr>
		<div class="content">
			<p>Soon to Come...</p>
		</div>
		<br>
	</div>
@endsection