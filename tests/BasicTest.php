<?php

class BasicTest extends TestCase
{
     public function testExample()
     {
          $this->json('POST', '/posts', ['title' => 'yance_kece', 'body' => 'payung rindu'])
          ->seeJson([
               'title' => 'yance_kece'
          ]);
     }

     public function testApplication()
     {
          $response = $this->call('GET', '/posts');
          $this->assertEquals(200, $response->status());
     }

     public function testGanteng()
     {
          $response = $this->call('PUT', '/posts/8', ['title' => 'Taylor']);
          $this->assertEquals(200, $response->status());
     }

}
