<?php

Route::get('/', 'DashboardController@index');
Route::resource('alumnis', 'AlumniController');
Route::resource('faculties', 'FacultyController');
Route::resource('departments', 'DepartmentController');
Route::resource('contact-types', 'ContactTypeController');
Route::resource('education-types', 'EducationTypeController');
