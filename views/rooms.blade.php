<ol>
@foreach($rooms as $room)
<li>Name: {{ $room['room_name'] }}<br/>
    Number: {{ $room['number'] }}<br/>
    Price: {{ $room['price'] }}<br/>
    Discount: {{ $room['discount'] }}<br/>
</li>
@endforeach
</ol>