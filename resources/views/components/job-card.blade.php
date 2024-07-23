@props(['job'])
<x-panel class="flex flex-col ">
    <div class="text-start text-sm">{{$job->employer->name}}</div>
    <div class="text-center py-8">
        <h3 class="text-2xl font-bold group-hover:text-blue-600  transition-colors duration-300">
            {{$job->title}}
        </h3>
        <p class="text-sm mt-4 ">
            {{$job->schedule}}  - {{$job->salary}}
        </p>
    </div>
    <div>
        <a href="#"></a>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class=" space-x-2 ">
            @foreach ($job->tags as $tag)
            <x-tag :$tag size='small' />
            @endforeach
        </div>
        <div>
            <x-employer-logo :width="42"></x-employer-logo>
        </div>
    </div>
</x-panel>
