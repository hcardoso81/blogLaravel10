<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project Creation

-   laravel new blogLaravel10 --jet
-   livewire
-   teams? no
-   npm install

## Database Model

-   https://www.youtube.com/watch?v=WASf74mDz68&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=49
-   creates Tables.
-   php artisan make:model Category -m
-   php artisan make:model Post -m
-   php artisan make:model Tag -m
-   php artisan make:migration create_post_tag_table
-   php artisan make:model Image -m
-   run migrations: php artisan migrate

## Relations Model

-   Generate models' nivel relations
-   example:
    <br>

        //Relations 1:N (inverse) a post belong to a user.

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        //Relations 1:N (inverse) a post belong to a category.

        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }

        //Relations N:N, many posts belong to many tags

        public function tags(): BelongsToMany
        {
            return $this->belongsToMany(Tag::class);
        }

        //Relations 1:1 Polimorfica

        public function image(): MorphOne
        {
            return $this->morphOne(Image::class, 'imageable');
        }

## Add factories, test's data

-   https://www.youtube.com/watch?v=eC8rDAiT1OM&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=50
-   php artisan make:factory CategoryFactory
-   php artisan make:factory PostFactory
-   php artisan make:factory TagFactory
-   php artisan make:factory ImageFactory
