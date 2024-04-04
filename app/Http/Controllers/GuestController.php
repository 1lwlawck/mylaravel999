<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    function index()
    {
        $guests = Guest::all();
        return view("guest.index", ['guests' => $guests]); // Mengirim data tamu ke view
    }

    function insert(Request $request)
    {
        $guest = new Guest();
        $guest->name = 'John';
        $guest->save();

        return redirect()->back()->with('success', 'Guest added successfully'); // Redirect kembali dengan pemberitahuan
    }

    function update(Request $request)
    {
        $guest = Guest::find(1); // Anda mungkin perlu parameter $id dari Request untuk menentukan tamu mana yang akan diperbarui
        $guest->name = "John"; // Mengubah nilai
        $guest->save(); // Menyimpan perubahan

        return redirect()->back()->with('success', 'Guest updated successfully'); // Redirect kembali dengan pemberitahuan
    }

    function delete(Request $request)
    {
        $guest = Guest::find(2); // Anda mungkin perlu parameter $id dari Request untuk menentukan tamu mana yang akan dihapus
        $guest->delete(); // Menghapus tamu

        return redirect()->back()->with('success', 'Guest deleted successfully'); // Redirect kembali dengan pemberitahuan
    }
}
