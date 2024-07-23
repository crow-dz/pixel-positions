<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-10">
            <h1 class="text-4xl font-bold">Let's Find Your Dream Job</h1>
            <form action="" method="get">
                <input type="text" name="search" id="search" placeholder="Web Developer..."
                    class="w-full max-w-xl mt-6 px-5 py-4 rounded-xl bg-white/5 border-white/10">
            </form>
        </section>
        <section class="pt-20">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-2 mt-6">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
