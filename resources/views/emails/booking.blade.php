<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Booking Request</title>
  <style>
    body { font-family: sans-serif; color: #333; background-color: #f9f9f9; }
    .container { max-width: 600px; margin: auto; padding: 20px; background: white; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
    h2 { color: #2d3748; border-bottom: 1px solid #e2e8f0; padding-bottom: 5px; margin-top: 20px; }
    p { margin: 6px 0; }
    .label { font-weight: bold; color: #4a5568; }
    .dog-section { margin-top: 15px; padding: 10px; background: #f1f5f9; border-radius: 4px; }
  </style>
</head>
<body>
  <div class="container">
    <h1>New Booking Request</h1>

    <h2>Owner Details</h2>
    <p><span class="label">Name:</span> {{ $booking['first_name'] }} {{ $booking['last_name'] }}</p>
    <p><span class="label">Email:</span> {{ $booking['email'] }}</p>
    <p><span class="label">Mobile Phone:</span> {{ $booking['mobile_phone'] }}</p>
    <p><span class="label">Home Phone:</span> {{ $booking['home_phone'] ?? 'N/A' }}</p>
    <p><span class="label">Emergency Contact:</span> {{ $booking['emergency_contact'] }}</p>
    <p><span class="label">Address:</span> {{ $booking['address'] }}</p>

    <h2>Vet Details</h2>
    <p><span class="label">Vet Name:</span> {{ $booking['vet_name'] }}</p>
    <p><span class="label">Vet Contact:</span> {{ $booking['vet_contact'] }}</p>

    <h2>Reservation Details</h2>
    <p><span class="label">Check-In:</span> {{ $booking['check_in_date'] }} at {{ $booking['check_in_time'] }} (Taxi: {{ $booking['check_in_taxi'] }})</p>
    <p><span class="label">Check-Out:</span> {{ $booking['check_out_date'] }} at {{ $booking['check_out_time'] }} (Taxi: {{ $booking['check_out_taxi'] }})</p>

    <h2>Pet Details</h2>
    @foreach ($booking['dogs'] as $i => $dog)
    <div class="dog-section">
      <h3>Dog {{ $i + 1 }}</h3>
      <p><span class="label">Name:</span> {{ $dog['name'] }}</p>
      <p><span class="label">Breed:</span> {{ $dog['breed'] }}</p>
      <p><span class="label">Age:</span> {{ $dog['age'] }}</p>
      <p><span class="label">Color:</span> {{ $dog['color'] }}</p>
      <p><span class="label">Sex:</span> {{ $dog['sex'] }}</p>
      <p><span class="label">Neutered:</span> {{ $dog['neutered'] ? 'Yes' : 'No' }}</p>
      <p><span class="label">Grooming Required:</span> {{ $dog['grooming'] }}</p>
      <p><span class="label">Medical/Feeding:</span> {{ $dog['requirements'] ?? 'None' }}</p>
      <p><span class="label">Illnesses/Disabilities:</span> {{ $dog['illnesses'] ?? 'None' }}</p>
    </div>
    @endforeach
  </div>
</body>
</html>
