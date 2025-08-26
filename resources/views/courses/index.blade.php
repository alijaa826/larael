@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Daftar Kursus</h2>
<div class="grid grid-cols-3 gap-4">
    @foreach($courses as $course)
    <div class="bg-white rounded-lg shadow p-4">
        <img src="{{ $course->thumbnail ?? 'https://via.placeholder.com/300' }}" class="rounded mb-2">
        <h3 class="text-lg font-semibold">{{ $course->title }}</h3>
        <p class="text-sm text-gray-600">Instruktur: {{ $course->instructor->name }}</p>
        <a href="{{ route('courses.show', $course) }}" class="text-blue-500 mt-2 inline-block">Lihat Kursus</a>
    </div>
    @endforeach
</div>
@endsection
