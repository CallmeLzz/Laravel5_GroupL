@if(isset($confirm))
	Congratulation! 
	{{ $reservation_name }}, you're success reservation for your vacation.
	You're choose {{ $reservation_type }} room for {{ $reservation_number_people }}.
	Departure date on: {{ $reservation_departure_date }}. And you can start your vaction on: {{ $reservation_arrival_date }}.
	With total cost: ${{ $price_rate }}.
	We're hope see you soon.

	Best regards, {{ $author }}.
@elseif(isset($cancel))
	{{ $reservation_name }}, we're so sorry when notify your reservation is "cancel".
	You're choose {{ $reservation_type }} room for {{ $reservation_number_people }}.
	Departure date on: {{ $reservation_departure_date }}. And you can start your vaction on: {{ $reservation_arrival_date }}.
	With total cost: ${{ $price_rate }}.
	We're reimburse your money soon.
	For further information please contacts us by mail: leisureresort@gmail.com
	Or:  +44 (0) 1334 837000 and  +44 (0) 1334 837099
	Address: St Andrews Scotland, United Kingdom KY16 8PN.

	Best regards, {{ $author }}.
@endif