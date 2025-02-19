@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-image: url('images/back1.png'); background-size: cover; height: 100vh; background-position: center;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
            <div class="card shadow-lg p-4">
                
                <h2 class="text-center mb-4">Sign Up</h2>
                <form action="{{ route('registerSave') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                       
                            @csrf
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Select our Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="parent">Parent</option>
                            <option value="teacher">Teacher</option>
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Create a password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                    <div class="text-center">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                    </div>
                </form>

                <!-- Social Login Buttons -->
 
            </div>
        </div>
    </div>
</div>
@endsection
