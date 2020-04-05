<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Relaciones de tablas

## Colecciones y serialización de datos

Colecciones

    //dd($users);

    //dd($users->contains(4));

    //dd($users->except([1, 2, 3]));

    //dd($users->only(4));

    //dd($users->find(4));

    dd($users->load('posts'));

serialización

    //dd($users->toArray());
    $user = $users->find(1);
    //dd($user);
    dd($user->toJson());
