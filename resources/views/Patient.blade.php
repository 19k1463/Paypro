@foreach($sent as $receive)
{
    <p>$receive->diagonosis</p>
    <p>$receive->reason </p>
    <p>$receive->food_to_eat</p>
    <p>$receive->level_of_danger</p>
}
@endforeach