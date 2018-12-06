<?php


Route::get("/","FrontController@index")->name("home");
Route::get("/about-us","FrontController@about")->name("about");
Route::get("/contact-us","FrontController@contact")->name("contact");
Route::post("/contact-us","FrontController@contactsave");
Route::get("/gallery","FrontController@gallery")->name("gallery");
Route::get("/service","FrontController@service")->name("service");
Route::get("/client","FrontController@client")->name("client");

Route::get("/client-details/{id}","FrontController@clientdetail")->name("clientdetail");




 














Route::group(["prefix"=>"admin","middleware"=>["auth","Logout"],"namespace"=>"Admin"],function(){

	Route::get("/","DashboardController@index");
	
	Route::get("/change-password","DashboardController@changePassword")->name("change");
	Route::post("/change-password","DashboardController@updateChangePassword");


	

	//team section
	Route::get("teams","TeamController@index")->name("team-list");
	Route::get("add-team","TeamController@create")->name("team-add");
	Route::post("add-team","TeamController@store");
	Route::get("edit-team/{id}","TeamController@edit")->name("team-edit");
	Route::put("edit-team/{id}","TeamController@update");
	Route::get("delete-team/{id}","TeamController@destroy")->name("team-delete");

	//testimonial section
	Route::get("testimonials","TestimonialController@index")->name("testimonial-list");
	Route::get("add-testimonial","TestimonialController@create")->name("testimonial-add");
	Route::post("add-testimonial","TestimonialController@store");
	Route::get("edit-testimonial/{id}","TestimonialController@edit")->name("testimonial-edit");
	Route::put("edit-testimonial/{id}","TestimonialController@update");
	Route::get("delete-testimonial/{id}","TestimonialController@destroy")->name("testimonial-delete");

	//gallery section
	Route::get("galleries","GalleryController@index")->name("gallery-list");
	Route::get("add-gallery","GalleryController@create")->name("gallery-add");
	Route::post("add-gallery","GalleryController@store");
	Route::get("edit-gallery/{id}","GalleryController@edit")->name("gallery-edit");
	Route::put("edit-gallery/{id}","GalleryController@update");
	Route::get("delete-gallery/{id}","GalleryController@destroy")->name("gallery-delete");


	//slider section
	Route::get("sliders","SliderController@index")->name("slider-list");
	Route::get("add-slider","SliderController@create")->name("slider-add");
	Route::post("add-slider","SliderController@store");
	Route::get("delete-slider/{id}","SliderController@destroy")->name("slider-delete");
	Route::get("edit-slider/{id}","SliderController@edit")->name("slider-edit");
	Route::put("edit-slider/{id}","SliderController@update");


	//feedback section
	Route::get("feedbacks","FeedbackController@index")->name("feedback-list");
	Route::get("add-feedback","FeedbackController@create")->name("feedback-add");
	Route::post("add-feedback","FeedbackController@store");
	Route::get("delete-feedback/{id}","FeedbackController@destroy")->name("feedback-delete");

	//page section
	Route::get("pages","PageController@index")->name("page-list");
	Route::get("add-page","PageController@create")->name("page-add");
	Route::post("add-page","PageController@store");
	Route::get("delete-page/{id}","PageController@destroy")->name("page-delete");
	Route::get("edit-page/{id}","PageController@edit")->name("page-edit");
	Route::put("edit-page/{id}","PageController@update");

	//client section
	Route::get("clients","ClientController@index")->name("client-list");
	Route::get("add-client","ClientController@create")->name("client-add");
	Route::post("add-client","ClientController@store");
	Route::get("delete-client/{id}","ClientController@destroy")->name("client-delete");
	Route::get("edit-client/{id}","ClientController@edit")->name("client-edit");
	Route::put("edit-client/{id}","ClientController@update");


	Route::resource('services', 'ServiceController');
	
});


Auth::routes();

