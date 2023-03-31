<x-app-layout>

    <head>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <div class="wrapAll clearfix">
			<div class="sidebar">
				<div class="navigation">
					<ul>
						<li><a href="#">Main page</a></li>
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

                <div id="simpleSearch">
                    <form action="" id="search_form" method="post">
                        @csrf
                        <input type="text" name="search" id="search" placeholder="Search Wikipedia"  />
                            <!-- <div id="submitSearch"></div> -->
                    </form>

				</div>
				
				<div class="article">

                    <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="mb-6">
                                <label class="block">
                                    <span class="text-gray-700">Title</span>
                                    <input type="text" name="title" class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('title')}}" />
                                </label>
                                @error('title')
                                    <div class="text-sm text-red-600">
                                        Please do fill in the Title
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block">
                                    <span class="text-gray-700">Description</span>
                                    <!-- <textarea id="editor" class="block w-full mt-1 rounded-md" name="description" rows="3"></textarea> -->
                                    <textarea name="content" class="form-control my-editor text-sm text-gray-800 dark:text-gray-200">{!! old('content', '123') !!}</textarea>
                                </label>
                                @error('description')
                                <div class="text-sm text-red-600">
                                    There is no Content please fill
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">
                                CREATE ARTICLE
                            </button>
                        </form>

				</div>


			</div>
		</div>

</x-app-layout>
