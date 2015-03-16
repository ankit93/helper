<?php

 /* paginator */
 
/* register */

$this->app->bindShared('paginator', function($app)
{
	$paginator = new Factory($app['request'], $app['view'], $app['translator']);

	$paginator->setViewName($app['config']['view.pagination']);

	$app->refresh('request', $paginator, 'setRequest');

	return $paginator;
});
	
 /* provides */
return array('paginator');



public function register()
{
	$this->registerHtmlBuilder();

	$this->registerFormBuilder();
}

protected function registerHtmlBuilder()
{
	$this->app->bindShared('html', function($app)
	{
		return new HtmlBuilder($app['url']);
	});
}

	/**
	 * Register the form builder instance.
	 *
	 * @return void
	 */
	protected function registerFormBuilder()
	{
		$this->app->bindShared('form', function($app)
		{
			$form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

			return $form->setSessionStore($app['session.store']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('html', 'form');
	}