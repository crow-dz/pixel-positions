<x-layout>
 

        <section>
            <x-section-heading>Search Result</x-section-heading>
            <div class="mt-6 space-y-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
