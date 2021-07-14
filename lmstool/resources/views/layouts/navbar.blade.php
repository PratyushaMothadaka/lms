<el-menu class="bg-white shadow-lg">
    <div class="flex items-baseline py-3">
        <div>
            <a class="justify-self-center text-black text-3xl font-bold mx-4 outline-none hover:none" href="{{ url('/') }}" :underline="false">
                W<span class="text-indigo-600 italic">e</span>L<span class="text-indigo-600 italic">e</span>arn
            </a>
        </div>
        <div>
            <el-link :underline="false"><a class="hover:text-teal-700 mx-4">Categories</a></el-link>
        </div>
        <div class="flex-auto justify-items-center">
        <el-form action="/search" method="post" class="flex">
            @csrf
            <input type="text" name="query"
                    class="border border-gray-600 rounded-l py-3 px-4 ml-4 w-full"
                    placeholder="Search here..."
                    v-model="search">
            <el-button native-type="submit" class="bg-teal-700 hover:bg-teal-900 text-white font-bold rounded-r py-3 px-4 mr-4 focus:outline-none">
                <i class="fa fa-search text-lg"></i>
            </el-button>
        </el-form>
        </div>
        <div>                    
            <el-link href="{{ url('/teaching') }}" class="hover:text-teal-700 mx-4 my-2 cursor-pointer focus:outline-none" :underline="false">Teach Here</el-link>
        </div>
            @if(Auth::guest())
                <div>
                <el-link href="{{ url('/login/student') }}"
                    class="text-teal-700 border border-teal-700 font-bold hover:border-teal-900 hover:text-teal-900 rounded py-3 px-8 ml-4 my-2 focus:outline-none" :underline="false">Log in</el-link>
                <el-link href="{{ url('/join/student') }}"
                    class="text-white border border-teal-700 font-bold bg-teal-700 hover:bg-teal-900 hover:border-teal-900 rounded py-3 px-8 mr-4 focus:outline-none" :underline="false">Sign up</el-link>
                </div>
            @else
                <my-menu :image="'{{ Auth::user()->avatar }}'" :name="'{{ Auth::user()->name }}'"></my-menu>
            @endif
    </div>
</el-menu>