<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .ticket-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            background-color: #fff;
            margin-left: 31%
        }
        .ticket-container img {
            width: 100%;
            height: auto;
        }
        .ticket-content {
            padding: 20px;
        }
        .ticket-content h2 {
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
        }
        .ticket-content p {
            margin: 5px 0;
            color: #666;
            text-align: center;
        }
        .ticket-info {
            margin-top: 10px;
            font-size: 16px;
        }
        .ticket-right {
            padding: 20px;
            text-align: center;
        }
        .ticket-right h3 {
            margin: 0 0 20px;
            font-size: 18px;
            text-align: center;
        }
        .ticket-right p {
            margin: 10px 0;
            color: #333;
            text-align: center;
        }
        .ticket-right img {
            width: 100px;
            height: 100px;
        }
        .powered-by {
            margin-top: 20px;
            color: #999;
            font-size: 12px;
        }
        .spane{
          text-align: center;
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <img src="{{ public_path('images/' . $event->image) }}" alt="">
        <div class="ticket-content">
            <h2>{{ $event->event_name }}</h2>
            <p> {{ $event->date }} , {{ $event->time }} AM. ,  {{ $event->duration }} h</p>
            <p>{{ $event->firstName }} {{ $event->lastName }}</p>
            <div class="ticket-info">
                <p style="color: #000000"> 1 x Ticket</p><br>
                <p style="color: #000000"> Total : {{ $event->price }} Dhs</p>
            </div>
        </div>
        <div class="ticket-right">
            <h3>{{ $event->venue }}</h3>
            <img src="https://via.placeholder.com/100" alt="QR Code">
            <p class="powered-by">Powered by Barren</p>
        </div>
    </div>
</body>
</html>
