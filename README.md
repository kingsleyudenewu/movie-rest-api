<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Movie Rest API

This is a laravel rest API that connects to [The One API](https://the-one-api.herokuapp.com) and
 here are the following steps to access this endpoints.
 This endpoint is grouped into movies and characters: 
 <p>
 For the movies endpoint it sorts by these three features using the key (<b>sort_by</b>) :
 <div class="highlight">
    <pre>
    - budget
    - runtime
    - box_office
    </pre>
 </div>
 </p>
 
 <p>
    For the Character endpoint it sorts by the following features using the keys : <b>sort_by, per_page, page</b>
 </p>
 
 <div class="highlight">
    sort_by
    <pre>
        -asc
        -desc
    </pre>
 </div>

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
