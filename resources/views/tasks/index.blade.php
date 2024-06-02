@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
<h1 class="mt-4">Daftar Tugas</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Daftar Tugas</li>
</ol>

<div class="row">
    @foreach($tasks as $task)
    <div class="col-12 col-md-4">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{ $task->name }}</h4>
                <small>Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d F Y') }}</small><br>
                <span class="badge bg-warning">{{ $task->status }}</span>
                <p class="card-text">{{ Str::limit($task->description, 40, '...') }}</p>
                <div class="mt-2">
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-warning">Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
