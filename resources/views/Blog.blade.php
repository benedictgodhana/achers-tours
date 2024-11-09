<!doctype html>
<html lang="en">
<head>
    <title>Archer's Tours and Travel - Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('Template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <style>
        #blogForm {
    animation: fadeIn 0.5s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
</head>
<body class="font-poppins bg-gray-50 text-gray-700">

<nav class=" w-full  navbar px-4    shadow-md rounded-md lg:px-8 lg:py-3 mt-1" style="background:orange">
  <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
    <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
    <img src="images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">

    </a>

    <div class="hidden lg:block">
      <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">

      <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75M12 3v18m-7.5-8.25v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5m6 0v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5"/>
  </svg>

  <a href="/" class="flex items-center">
    Home
  </a>
</li>


        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 110 20 10 10 0 010-20zm-.75 7.5a.75.75 0 011.5 0v4a.75.75 0 01-1.5 0v-4zm0 7.25a.75.75 0 101.5 0 .75.75 0 00-1.5 0z"/>
  </svg>

  <a href="/about" class="flex items-center">
    About Us
  </a>
</li>

<li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.75c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9s-9 4.03-9 9c0 4.97 4.03 9 9 9zm0 0s4.5-4.5 4.5-7.5c0-2.48-2.02-4.5-4.5-4.5s-4.5 2.02-4.5 4.5c0 3 4.5 7.5 4.5 7.5z" />
  </svg>

  <a href="/destination" class="flex items-center">
    Destinations
  </a>
</li>

<li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c5.376 0 9.75 4.374 9.75 9.75s-4.374 9.75-9.75 9.75-9.75-4.374-9.75-9.75S6.624 2.25 12 2.25zm0 1.5a8.25 8.25 0 1 0 0 16.5 8.25 8.25 0 0 0 0-16.5zm0 3a5.25 5.25 0 0 1 5.25 5.25c0 .77-.152 1.502-.42 2.174l-3.079-1.026a3 3 0 0 0-2.252-2.252L10.5 8.07A5.245 5.245 0 0 1 12 6.75z" />
  </svg>

  <a href="#" class="flex items-center">
    Tours
  </a>
</li>


<li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9v8.25c0 1.518 1.232 2.75 2.75 2.75h11c1.518 0 2.75-1.232 2.75-2.75V9m-16.5 0h16.5M3.75 9l8.25-5.25L20.25 9M9.75 9V5.25M14.25 9V5.25M5.25 12.75h4.5m5.25 0h4.5m-14.25 3.75h15" />
  </svg>

  <a href="/packages" class="flex items-center">
    Packages
  </a>
</li>



<li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
  </svg>

  <a href="/blog" class="flex items-center">
    Blogs
  </a>
</li>




        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black" >
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 5.25c0-1.242 1.008-2.25 2.25-2.25h1.59c.927 0 1.772.52 2.175 1.342l.914 1.83c.39.78.22 1.718-.42 2.31l-1.073.99a.992.992 0 0 0-.228 1.09c.918 2.15 2.842 4.073 4.992 4.992a.992.992 0 0 0 1.09-.228l.99-1.073c.592-.64 1.53-.81 2.31-.42l1.83.914c.822.403 1.342 1.248 1.342 2.175v1.59c0 1.242-1.008 2.25-2.25 2.25h-.75C9.407 21.75 2.25 14.593 2.25 6v-.75Z" />
  </svg>

  <a href="/contact" class="flex items-center">
    Contact
  </a>
</li>

        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>

          <a href="/login" class="flex items-center">
            Account
          </a>
      </ul>
    </div>
    <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
      <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </span>
    </button>
  </div>
</nav>


<!-- Blog Section -->
<div class="container mx-auto px-4 py-4 animate__animated animate__fadeIn">
    <!-- Header Section with Button -->
    <div class="flex flex-col md:flex-row items-center justify-between p-4 rounded-md mb-8 shadow-lg " style="background:navy">
        <h2 class="text-xl font-semibold text-white text-center mb-4 md:mb-0">Latest Blogs</h2>
        <button onclick="toggleEditor()" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md shadow-md transition duration-200">
            Create Blog
        </button>
    </div>

    <!-- Blog Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($blogs as $blog)
    <div class="flex flex-col md:flex-row bg-white shadow-sm border border-slate-200 rounded-lg overflow-hidden">
        <!-- Image Section -->
        <div class="md:w-2/5 w-full h-48 md:h-auto overflow-hidden">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="h-full w-full object-cover rounded-t-lg md:rounded-none md:rounded-l-lg">
        </div>

        <!-- Content Section -->
        <div class="p-4 flex flex-col justify-between">
            <div>
                <div class="mb-2 inline-block bg-teal-600 py-0.5 px-2.5 rounded-full text-xs text-white">Latest</div>
                <h4 class="text-slate-800 text-lg font-semibold mb-2">{{ $blog->title }}</h4>

            </div>
            <a href="{{ route('blog.show', $blog->id) }}" class="text-orange-500 font-semibold text-sm hover:underline flex items-center">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
    @endforeach
</div>
</div>

<!-- Blog Editor Modal -->
<div id="blogEditor" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg w-full max-w-2xl p-6">
        <!-- Header -->
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h3 class="text-2xl font-semibold text-gray-800">Create New Blog</h3>
            <button onclick="toggleEditor()" class="text-gray-600 hover:text-gray-800">&times;</button>
        </div>

        <!-- Blog Title Input -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Blog Title</label>
            <input type="text" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-orange-500">
        </div>

        <!-- Quill Editor for Blog Content -->
        <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content" id="editor"
                              class="mt-1 p-2 w-full border rounded-md focus:ring-2 focus:ring-blue-400"
                              rows="10"></textarea>
                </div>

        <!-- Image Upload Section -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input type="file" id="image" class="mt-2 block w-full text-gray-700">
            <div id="imagePreview" class="mt-4 hidden">
                <p class="text-sm font-medium text-gray-600">Image Preview:</p>
                <img id="previewImg" src="" alt="Image Preview" class="mt-2 w-full h-48 object-cover rounded-md">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button onclick="submitBlog()" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-md shadow-md transition duration-200">
                Submit Blog
            </button>
        </div>
    </div>
</div>
<footer class=" text-light py-16" style="background:navy">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-md-2">
                    <img src="images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">
                    <p class="mt-3">Archer's Tours and Travel offers the best travel experiences across Africa, where your adventure begins!</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Quick Links</p></strong>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-light">Home</a></li>
                        <li><a href="/about.html" class="text-light">About</a></li>
                        <li><a href="/destination" class="text-light">Destinations</a></li>
                        <li><a href="/tour" class="text-light">Tours</a></li>
                        <li><a href="/contact" class="text-light">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Tours</p></strong>
                    <p>Direct: +254-722-394892</p>
                    <p>Mobile : +254-722-394892</p>
                    <p>Email: stephen@archersafrica.com</p>
                </div>

                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Travel</p></strong>
                    <p>Direct: +254-733-964994</p>
                    <p>Mobile: +254-720-865455 +254-733-964994</p>
                    <p>Email: archers@archersafrica.com</p>
                </div>

                <!-- Contact and Location -->
                <div class="col-md-3">
                <strong><p class="" style="color:orange">Location and Contact</p></strong>
                    <p>Peponi Plaza, Peponi Road - Westlands</p>
                    <p>P.O. Box 437, 00606 Nairobi - Kenya - East Africa</p>
                    <p>Email: archers@archersafrica.com</p>
                    <p>Phone: +254-720-865455 +254-733-964994</p>

                    <!-- Social Media Icons -->
                    <div class="social-icons ">
                        <a href="https://facebook.com" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Archer's Tours and Travel. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toggle Navbar Menu Script -->
    <script>
        document.getElementById('navbar-toggle').onclick = function() {
            const menu = document.getElementById('navbar-menu');
            menu.classList.toggle('hidden');
        };
    </script>


    <!-- Other sections like footer or additional content go here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
<script>
    // Initialize Quill


    // Toggle the editor modal visibility
    function toggleEditor() {
        document.getElementById('blogEditor').classList.toggle('hidden');
    }

    // Preview uploaded image
    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('imagePreview').classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });

    // Submit the blog (placeholder function)
    function submitBlog() {
        const title = document.getElementById('title').value;
        const content = quill.root.innerHTML; // Get the HTML content from Quill editor
        const image = document.getElementById('image').files[0];

        // Placeholder: Implement save functionality as per requirements
        console.log("Blog Submitted:", { title, content, image });

        toggleEditor(); // Close the editor modal after submission
    }
</script>

<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');

        // Hide the success message after 4 seconds
        setTimeout(() => {
            const message = document.getElementById('success-message');
            if (message) {
                message.style.transition = 'opacity 0.5s';
                message.style.opacity = '0';

                // Optional: Completely remove the message from the DOM after fade-out
                setTimeout(() => message.remove(), 500);
            }
        }, 4000);
    </script>

</body>
</html>
