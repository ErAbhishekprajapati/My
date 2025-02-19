@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-image: url('images/back1.png'); background-size: cover; height: 100vh; background-position: center;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
            <div class="card shadow-lg p-4">
                <h2 class="text-center mb-4">Login</h2>
                <form method="POST" action="{{ route('dashboard') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="email" name="name" required placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="parent">Parent</option>
                            <option value="teacher">Teacher</option>
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="text-center">
                    <p>Do not have an account? <a href="{{ route('signup') }}">Signup here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
