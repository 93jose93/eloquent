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
    
    
## Formato de valores en tablas y presentación de datos

php artisan make:model Post -m –f 

 para crear el modelo con la migración que es –m y el Factory que es –f donde se crea en factories el factori Post donde se crean oraciones aleatorias, donde creara datos falsos en la base de datos

php artisan migrate:refresh --seed 

se usa este comando para actualizar los campos que se han creado en la base de datos, y --seed es para agregar los datos de semilla los datos falsos que se asigna como ejemplo.

