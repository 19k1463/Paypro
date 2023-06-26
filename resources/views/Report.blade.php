@php
    if(Auth::check() && Auth::user()->hasRole('doctors')) {
        print '<p>Welcome, Doctor!</p>';
        foreach($doctor as $doctors) {
            print '<p>' . $doctors->diagonosis . '</p>';
            print '<p>' . $doctors->reason . '</p>';
            print '<p>' . $doctors->food_to_eat . '</p>';
            print '<p>' . $doctors->level_of_danger . '</p>';
        }
    }
@endphp 