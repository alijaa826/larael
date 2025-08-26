@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded p-6">
    <h2 class="text-2xl font-bold mb-2">{{ $course->title }}</h2:
    <p class="text-gray-600 mb-4">{{ $course->description }}</p>

    <h3 class="text-xl font-semibold mb-2">Materi</h3>
    <ul class="list-disc pl-6">
        @foreach($course->lessons as $lesson)
            <li>
                <span class="font-medium">{{ $lesson->title }}</span>
                @if($lesson->video_url)
                    <a href="{{ $lesson->video_url }}" target="_blank" class="text-blue-500">Tonton</a>
                @endif
            </li>
        @endforeach
    </ul>

    <form action="{{ route('enrollments.store', $course) }}" method="POST" class="mt-4">
        @csrf
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Daftar Kursus</button>
    </form>
</div>
@endsection
