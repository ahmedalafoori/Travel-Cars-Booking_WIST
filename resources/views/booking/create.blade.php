@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Book {{ $car->name }}</h2>
    <form action="{{ route('book.store', $car->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="payment_method">Payment Method</label>
            <select class="form-control" id="payment_method" name="payment_method" required>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" readonly>
        </div>
        <input type="hidden" name="payment_status" value="pending">
        <button type="submit" class="btn btn-primary">Book and Pay Now</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const startDate = document.getElementById('start_date');
    const endDate = document.getElementById('end_date');
    const amountField = document.getElementById('amount');
    const pricePerDay = {{ $car->price_per_day }};

    function calculateAmount() {
        if (startDate.value && endDate.value) {
            const start = new Date(startDate.value);
            const end = new Date(endDate.value);
            const days = (end - start) / (1000 * 60 * 60 * 24) + 1;
            const totalAmount = days * pricePerDay;
            amountField.value = totalAmount.toFixed(2);
        }
    }

    startDate.addEventListener('change', calculateAmount);
    endDate.addEventListener('change', calculateAmount);
});
</script>
@endsection
