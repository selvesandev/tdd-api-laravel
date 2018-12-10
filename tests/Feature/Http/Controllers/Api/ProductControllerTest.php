<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    /**
     * //Tests whether a user can create a product or not.
     * @test
     */
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

}
