<h1 class="text-center text-4xl text-black font-bold mt-12">Enrolled courses by {{ $user->name }}</h1>
<div class="grid grid-cols-4 mt-12 gap-4 mx-6">
    @foreach($user->follows as $course)
        <el-card class="group hover:shadow-xl border border-gray-300 mx-auto" style="width: 300px">
            <el-link href="{{ route('course',$course->id) }}" class="outline-none">
                <img src="/storage/{{ $course->course_image }}" alt="image" style="height: 200px ; width: 300px">
                <div class="px-6 py-6">
                    <h1 class="text-center font-bold">{{ $course->course_title }}</h1>
                </div>
            </el-link>
        </el-card>
    @endforeach
</div>