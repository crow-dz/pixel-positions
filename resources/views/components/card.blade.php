@props(['job'])
<x-panel class="flex flex-row justify-between">
    <div class="flex flex-row">
        <div>
            <x-employer-logo :width="90"></x-employer-logo>
        </div>
        <div class="flex flex-col px-4 justify-between">
            <div class="text-start text-sm text-gray-400 ">Laracasts</div>

            <h3 class="text-2xl font-bold mb-4 mt-2 group-hover:text-blue-600 transition-colors duration-300">
                Full Stack Developer
            </h3>
            <p class="text-sm  text-gray-400">
                Full Time - From $60,000
            </p>

        </div> 
    </div>
    <div>
        <a href="#"></a>
    </div>
    <div class="flex flex-col  items-end justify-between">
        <div>
            <x-tag>Remote</x-tag>
            <x-tag>22h</x-tag>
        </div>
        <div class=" space-x-2 ">
            @foreach ($job->tags as $tag)
            <x-tag :$tag />
            @endforeach
        </div>

    </div>
</x-panel>
