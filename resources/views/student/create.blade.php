<x-layouts.app title="Create Student">
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        @include('student._form')

        <button type="submit" class="btn">Create Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</x-layouts.app>
