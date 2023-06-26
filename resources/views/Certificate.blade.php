<h1>User_Login</h1>
<form action="{{ route('doctor.remarks') }}" method="post">
   
    @csrf 
    @php
    print_r($errors);   
    @endphp
    <input type="text" name="dia" placeholder="enter your diagnosis">
    <input type="text" name="reason" placeholder="enter your reason">
    <input type="text" name="food_to_eat" placeholder="enter your food_to_eat">
    <input type="number" name="level_of_danger" placeholder="enter your level_of_danger">
    <input type="submit" value="Submit">
</form>