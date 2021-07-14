<el-menu class="w-1/4 h-full border-gray-300 border-r">
    <div style="background-image:url('/images/bgimage.jpg')"
        class="bg-cover bg-center shadow-lg h-1/6 w-full bg-gray-400 border-gray-200 border-b px-auto py-8">
    {{-- <div class="h-1/6 w-full bg-gray-400 border-gray-200 border-b px-auto py-8"> --}}
        <div>
            <img src="/storage/{{ Auth::user()->avatar }}" class="mx-auto align-center mb-3 h-20 w-20 rounded-full">
        </div>
        <div>
            <p class="font-bold text-3xl mx-auto text-center">{{ Auth::user()->name }}</p>
            <p class="font-bold text-xl mx-auto text-center">{{ Auth::user()->email }}</p>
        </div>
    </div>

    <a  href="/"
        class="block group font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5">
            Home
    </a>

    <a href="#"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5">
            My Dashboard
    </a>

    <a  href="{{ route('profile',auth()->user()) }}"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5"> 
            My Profile
    </a>

    <a href="{{ route('profile.edit',auth()->user()) }}"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5"> 
        Edit Profile
    </a>
    <a  href="{{ route('mycourses',auth()->user()) }}"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5">
            My Courses
    </a>
    <a  href="{{ url('/upload') }}"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5">
            Upload Course
    </a>
    <a  href="#"
        class="block font-bold hover:text-white hover:border-teal-900 hover:bg-teal-900 hover:font-bold px-4 py-5">
        Help
    </a>
    <div class="mb-32"></div>
</el-menu>