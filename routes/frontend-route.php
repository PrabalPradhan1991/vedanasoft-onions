<?php

Route::get('/', function(){
	return view('frontend.index');
})->name('index');

Route::get('/about-us', function(){
	return view('frontend.about-us');
})->name('about-us');

Route::get('/blog-single-post', function(){
	return view('frontend.blog-single-post');
})->name('blog-single-post');

Route::get('/blog', function(){
	return view('frontend.blog');
})->name('blog');

Route::get('/contact', function(){
	return view('frontend.contact');
})->name('contact');

Route::get('/event', function(){
	return view('frontend.event');
})->name('event');

Route::post('/event/{event_title}', function($event_title){
	$input = request()->all();

	\Mail::to('prabalpradhan1991@gmail.com')
		->send(new \App\Mail\EventMail($input, $event_title));

	session()->flash('success-msg', 'We have received your application. We will contact you soon');

	return redirect()->back();
})->name('event-post');

Route::get('/event-single-post', function(){
	return view('frontend.event-single-post');
})->name('event-single-post');

Route::get('/our-team', function(){
	return view('frontend.our-team');
})->name('our-team');

Route::get('/portfolio-item', function(){
	return view('frontend.portfolio-item');
})->name('portfolio-item');

Route::get('/portfolio', function(){
	return view('frontend.portfolio');
})->name('portfolio');

Route::post('/contact', function() {
	$input = request()->all();

	\Mail::to('prabalpradhan1991@gmail.com')
		->send(new \App\Mail\ContactMail($input));

	session()->flash('success-msg', 'We have received your email. We will contact you soon');

	return redirect()->back();

})->name('contact-post');