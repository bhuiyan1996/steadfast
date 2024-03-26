@extends('backend.master')

@section('backend_content')
    <!-- Page Content -->
    <div class="container-fluid">
        <h1 class="mt-4">VAT Calculator</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="grossSum" class="form-label">Gross Sum</label>
                    <input type="number" class="form-control" id="grossSum" placeholder="Enter Gross Sum">
                </div>
                <div class="mb-3">
                    <label for="vatOperation" class="form-label">VAT Calculation Operation</label>
                    <select class="form-select" id="vatOperation">
                        <option value="include">Include VAT</option>
                        <option value="exclude">Exclude VAT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="vatPercentage" class="form-label">Tax Percentage (%)</label>
                    <input type="number" class="form-control" id="vatPercentage" placeholder="Enter Tax Percentage">
                </div>
                <button id="calculateBtn" class="btn btn-primary">Calculate</button>
            </div>
            <div class="col-md-6">
                <h3>VAT Calculation Result</h3>
                <p id="vatAmount"></p>
            </div>
        </div>
    </div>
@endsection

{{-- @push('scripts') --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calculateBtn').click(function() {
                var grossSum = parseFloat($('#grossSum').val());
                var vatOperation = $('#vatOperation').val();
                var vatPercentage = parseFloat($('#vatPercentage').val());

                if (isNaN(grossSum) || isNaN(vatPercentage)) {
                    alert('Please enter valid numbers.');
                    return;
                }

                var vatAmount = 0;
                if (vatOperation === 'exclude') {
                    vatAmount = Math.round((grossSum / (1 + (vatPercentage / 100)) - grossSum) * -1);
                } else if (vatOperation === 'include') {
                    vatAmount = Math.round(grossSum * (vatPercentage / 100));
                }

                $('#vatAmount').text('VAT Amount: ' + vatAmount.toFixed(2));
            });
        });
    </script>
{{-- @endpush --}}
