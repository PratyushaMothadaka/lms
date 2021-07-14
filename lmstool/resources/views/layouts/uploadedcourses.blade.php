@if(count($courses)>0)
<div>
    <h1 class="text-3xl text-center font-bold my-16">Recently added courses</h1>
</div>
@endif
<div class="grid grid-cols-4 gap-4 mx-6">                
    @foreach($courses as $course)
        <el-card class="group hover:shadow-2xl border border-gray-300 mx-auto" style="width: 300px">
            <el-link href="{{ route('course',$course->id) }}" class="outline-none">
                <img src="/storage/{{ $course->course_image }}" alt="image" style="height:200px ; width: 300px">
                <div class="px-2 py-4">
                    <h1 class="text-center font-bold">{{ $course->course_title }}</h1>
                </div>
            </el-link>
        </el-card>
    @endforeach
</div>