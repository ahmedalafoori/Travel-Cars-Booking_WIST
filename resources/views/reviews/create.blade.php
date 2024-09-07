@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Review for {{ $car->name }}</h2>
    <form action="{{ route('review.store', $car) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rating">Rating</label>
            <select class="form-control" id="rating" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>
        <div class="form-group">
            <label for="review">Review</label>
            <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit Review</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Skip</a>
        </div>
    </form>
</div>
@endsection
