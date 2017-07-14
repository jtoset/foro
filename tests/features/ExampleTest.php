<?php

class ExampleTest extends FeatureTestCase
{
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Jordi Toset',
        ]);


        $this->actingAs($user,'api')
             ->visit('/api/user')
             ->see('Jordi Toset');
    }
}
