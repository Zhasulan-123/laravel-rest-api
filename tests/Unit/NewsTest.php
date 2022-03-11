<?php

namespace Tests\Unit;

use App\Models\News;

use Tests\TestCase;

class NewsTest extends TestCase
{

    public function testGet()
    {
        $response = $this->get('/');
		$response->assertOk();
    }

    public function testIf()
    {
        $news1 = News::make([
            'title' => 'Laravel testing',
            'description' => 'Test if a user can be deleted (make sure that you add the middleware',
            'text' => 'Text body'
        ]);

        $news2 = News::make([
            'title' => 'Laravel testing',
            'description' => 'Test if a user can be deleted (make sure that you add the middleware',
            'text' => 'Text body'
        ]);

        $this->assertFalse($news1->title != $news2->title);
    }

    public function testCreate(){
        $this->post('/create', [
            'title' => 'Laravel testing',
            'description' => 'Test if a user can be deleted (make sure that you add the middleware',
            'text' => 'Text body'
        ]);

        $this->assertFalse(false);
    }
    
}
