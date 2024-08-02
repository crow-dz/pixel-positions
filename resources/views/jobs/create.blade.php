<x-layout>
    <x-section-heading>Create Job</x-section-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Developer" />

        <x-forms.input label="Salary" name="salary" placeholder="DZD 30000" />
        <x-forms.input label="Location" name="location" placeholder="Algeria , M'sila" />

        <x-forms.select label='Schedule' name='schedule'>
            <option> Full Time</option>
            <option> Part Time</option>
        </x-forms.select>
        <x-forms.input label="Url" name="url" placeholder="https://www.acme.com/jobs" />
        <x-forms.checkbox label='Feature (Cost Extra)' name='featured'>

        </x-forms.checkbox>
        <x-forms.input label="Tags" name="tags" placeholder="Laravel,PHP,Flutter ..." />

    <x-forms.textarea label="Description" name="description" placeholder="Developer" >       
    </x-forms.textarea>

       
        <x-forms.divider />
        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>

</x-layout>
