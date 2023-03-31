<x-app-layout>
    <!--  -->
    <head>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <div class="wrapAll clearfix">
			<div class="sidebar">
				<div class="navigation">
					<ul>
						<li><a href="{{ url('/') }}">Main page</a></li>
						<li><a href="#">Contents</a></li>
                        <li><a href="#">About Wikiculture</a></li>
						<li><a href="#">Random Article</a></li>
                        <li><a href="#">Contact Us</a></li>
					</ul>
					<h3>Contribute</h3>
					<ul>
						<li><a href="#">Help</a></li>
						<li><a href="#">Learn to edit</a></li>
						<li><a href="#">Recent changes</a></li>
                        <li><a href="#">Upload file</a></li>
					</ul>
					<h3>Print/export</h3>
					<ul>
						<li><a href="#">Download as PDF</a></li>
						<li><a href="#">Printable version</a></li>
					</ul>
                    <h3>Languages</h3>
					<!-- <ul>
						<li><a href="#">Download as PDF</a></li>
						<li><a href="#">Printable version</a></li>
					</ul> -->
				</div>


			</div>
			<div class="mainsection">
				<div class="headerLinks">
                    <a href="{{ route('register') }}">Create account</a>
                    <a href="{{ route('login') }}">Log in</a>
				</div>
                <div id="simpleSearch">
                    <form action="{{ route('post.index') }}" id="search_form" method="post">
                        @csrf
                        <input type="text" name="search" id="search" placeholder="Search Wikipedia"  />
                            <!-- <div id="submitSearch"></div> -->
                    </form>

				</div>
				<div class="tabs clearfix">
					<div class="tabsLeft">
						<ul>
							<li><a href="#" class="active">Article</a></li>
							<li><a href="#">Talk</a></li>
						</ul>
					</div>

					<div class="tabsRight">
						<ul>
							<li><a href="#" class="active">Read</a></li>
                            <li><a href="{{ route('posts.create') }}">Create</a></li>
							<li><a href="{{ route('posts.edit', 2)}}">Edit</a></li>
							<li><a href="#">View history</a></li>
						</ul>
					</div>

				</div>
                @foreach ($posts as $post)
				<div class="article">
					<h1>{{$post->title}}</h1>
					<p class="siteSub"></p>
					<p>{{$post->content}}</p>

					<!-- <div class="lavenderBox">
						<div class="header">Panel title</div>
						<div class="subtitle linklist"><a href="#">Lorem</a> <a href="#">Ipsum</a> <a href="#">Dolorestitas</a> </div>
						<div class="linklist">
							<a href="#">Percipit </a> <a href="#">Mnesarchum </a> <a href="#">Molestie </a> <a href="#">Phaedrum </a> <a href="#">Luptatum constituam </a> <a href="#">Habeo adipisci </a> <a href="#">Inani zril  </a> <a href="#">Forensibus sea </a> <a href="#">Habeo adipisci </a> <a href="#">Minimum corrumpit </a> <a href="#">Regione suscipit </a> <a href="#">Has et partem </a><a href="#">Percipit </a> <a href="#">Mnesarchum </a> <a href="#">Molestie </a> <a href="#">Phaedrum </a> <a href="#">Luptatum constituam </a> <a href="#">Habeo adipisci </a> <a href="#">Inani zril  </a> <a href="#">Vel nisl albucius </a> <a href="#">Habeo adipisci </a> <a href="#">Minimum corrumpit </a> <a href="#">Regione suscipit </a> <a href="#">Percipit maiestatis </a> <a href="#">Regione suscipit </a> <a href="#">Percipit maiestatis </a>
						</div>

						<div class="subtitle">Subtitle</div>
					</div> -->

					<div class="categories">
						<a href="#">{{$post->category->name}}</a>
                        <a href="#">Regione suscipit </a>
                        <a href="#">Has et partem </a>
					</div>

				</div>
                @endforeach
				<div class="pagefooter">
					<p>This page was created on {{$post->created_at}}</p>
					<div class="footerlinks">
						<a href="#">Privacy policy</a> <a href="#">About</a> <a href="#">Terms and conditions</a> <a href="#">Cookie statement</a> <a href="#">Developers</a>
					</div>
				</div>


			</div>
		</div>

</x-app-layout>
