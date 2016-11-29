<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
	use DatabaseMigrations;

	public function setUp()
	{
		parent::setUp();
		$this->asAdmin();
	}

    public function test_an_admin_can_visit_dashboard_page()
    {
    	$this->visit('/dashboard')
    		->see('Welcome Admin');
    }

    public function test_an_admin_can_view_all_the_available_pages()
    {
    	$page = $this->createPage([
    		'title'	=> 'Services'
    	]);

    	$this->visit('/dashboard/pages')
    		->see('Services');
    }

    public function test_an_admin_can_edit_a_page_information()
    {
    	$page = $this->createPage([
    		'title'	=> 'Service',
            'description'   => 'Lorem ipsum dolor sit amet'
    	]);

    	$this->visit('/dashboard/pages/'.$page->id.'/edit')
    		->type('Services', 'title')
            ->type('Updated description', 'description')
    		->press('Update')

    		->seeInDatabase('pages', [
    			'id'	=> $page->id,
    			'title'	=> 'Services',
                'description'   => 'Updated description'
    		]);
    }
}
