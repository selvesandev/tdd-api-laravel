# TEST DRIVER API DEVELOPMENT.


In TDD You first write the test then you write the code to make the test pass.


Create a Laravel Test file.
```
php artisan make:test Http/Controllers/Api/ProductControllerTest
```


In order to run a test you will have to access the `phpunit` that is inside your vendor folder.

```
./vendor/bin/phpunit tests/Feature/Http/Controllers/Api/ProductControllerTest.php
``` 
You will see a green background test if it was successful.


#### Whenever you write the `TEST` most of the time you have following three steps.

#### Given 
Describes the pre conditions for the test to work.
**user is authenticated**

#### When
The action we want to take.
**post request create product**

#### Then
Describes the outcome of that action according to the condition that we have in the given.
**product exists**

##### Example.
```
public function canCreateProduct()
{
    //given
    //use is authenticated.
    // when
    $response = $this->json('POST', '/api/products', [

    ]);
    //then
    $response->assertStatus(201); // when we make a post request we aspect the response to be 201.
}
```
This will return 
```
Expected status code 201 but received 404.
Failed asserting that false is true.
```
Since we don't have the endpoint.

##### Lets create Model, Controller and Migration for Product.
```
php artisan make:model Product -mc
```

```
class ProductController extends Controller
{
    public function store()
    {
        return response()->json([], 201);
    }
}
```
Now the test will pass.


