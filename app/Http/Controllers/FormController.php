<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }

    public function fetchData()
    {
        $data = [
            ['id' => 1, 'name' => 'Tester7', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address1', 'gender' => 'Male'],
            ['id' => 2, 'name' => 'Tester6', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG34sB7Vwl5Xhiir3RPh_tjWLCk0FvMw98IR0hPXEUzA&s', 'address' => 'Test Address2', 'gender' => 'Male'],
            ['id' => 3, 'name' => 'Tester4', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPziFneiVI44ZvBph-l1sz2H0KWen31njpTlIN0MBcmg&s', 'address' => 'Test Address3', 'gender' => 'Male'],
            ['id' => 4, 'name' => 'Tester1', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address4', 'gender' => 'Male'],
            ['id' => 5, 'name' => 'Tester5', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address5', 'gender' => 'Male'],
            ['id' => 6, 'name' => 'Tester2', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address6', 'gender' => 'Male'],
            ['id' => 7, 'name' => 'Tester3', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 8, 'name' => 'Tester20', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 9, 'name' => 'Tester17', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 10, 'name' => 'Tester19', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 11, 'name' => 'Tester18', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address1', 'gender' => 'Male'],
            ['id' => 12, 'name' => 'Tester16', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address2', 'gender' => 'Male'],
            ['id' => 13, 'name' => 'Tester14', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address3', 'gender' => 'Male'],
            ['id' => 14, 'name' => 'Tester15', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address4', 'gender' => 'Male'],
            ['id' => 15, 'name' => 'Tester11', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address5', 'gender' => 'Male'],
            ['id' => 16, 'name' => 'Tester12', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address6', 'gender' => 'Male'],
            ['id' => 17, 'name' => 'Tester13', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 18, 'name' => 'Tester10', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 19, 'name' => 'Tester8', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],
            ['id' => 20, 'name' => 'Tester9', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sunflower_from_Silesia2.jpg', 'address' => 'Test Address7', 'gender' => 'Male'],

            // Add more data as needed
        ];

        return response()->json($data);
    }
}
