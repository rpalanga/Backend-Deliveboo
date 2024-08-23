<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Typology;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $typologies = Typology::all();

        return view('auth.register', compact('typologies'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $data = $request->all();

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'alpha'],
            'email' => ['required', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'string', 'max:200'],
            'img' => ['nullable', 'max:5000', 'file'],
            'description' => ['nullable', 'string', 'max:5000'],
            'address' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'digits:11'],
            'phone_number' => ['nullable', 'digits:10'],
            'typologies' => ['required', 'min:1']
        ],
        [
            'name.required' => 'Inserisci il tuo nome',
            'name.max' => "Puoi usare al massimo :max caratteri",
            'name.alpha' => "Il tuo nome deve contenere solo lettere",
            'email.required' => "Indirizzo email obbligatorio",
            'password.required' => 'Inserisci una password.',
            'password.confirmed' => 'Le due password non sono uguali',
            'password.min' => 'La password deve contenere almeno :min caratteri.',
            'restaurant_name.required' => 'Il tuo ristorante deve avere un nome',
            'restaurant_name.max' => 'Il tuo ristorante deve avere un massimo di :max caratteri', 
            'img.max' => "Puoi usare al massimo :max caratteri",
            'description.max' => "Puoi usare al massimo :max caratteri",
            'address.required' => 'Inserisci un indirizzo valido',
            'address.max' => 'Il tuo indirizzo non deve essere lungo :max caratteri',
            'vat.required' => 'Inserisci un numero valido',
            'vat.digits' => 'Devi inserire 11 numeri per la tua Partita IVA',
            // 'phone_number.required' => 'Inserisci un numero di telefono valido',
            'phone_number.digits' => 'Il numero di telefono deve avere esattamente 10 numeri',
            'typologies.required' => 'Devi selezionare almeno una tipologia per il tuo ristorante'
        ]
    );

    // $restaurant_image = new Restaurant();

    if ($request->hasFile("img")) {
        $path = Storage::disk("public")->put("images", $request->img);

        // $restaurant_image->img = $path;
    }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'name' =>$request->restaurant_name,
            'img' => $path,
            'description' => $request->description,
            'address' => $request->address,
            'vat' => $request->vat,
            'phone_number' => $request->phone_number
        ]);

        if (Arr::exists($data, "typologies")) $restaurant->typologies()->attach($data["typologies"]);



        // $restaurant->save();

        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
