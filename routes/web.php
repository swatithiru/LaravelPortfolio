<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'hello world';
});

Route::get('index','HomeController@create');
Route::get('skill','SkillController@index');
Route::get('skill','SkillController@managerialSkills');
//Route::get('skill','SkillController@transferableSkills');
Route::get('aboutme','AboutController@index');
Route::get('resume','ResumeController@index');
Route::get('portfolio','PortfolioController@index');
Route::get('websites','PortfolioController@website');
Route::get('apps','PortfolioController@apps');
Route::get('design','PortfolioController@design');
Route::get('photography','PortfolioController@photography');
Route::get('hireme','HireController@index');
Route::get('references','ReferController@index');
Route::get('addreferences','AddReferController@index');
//Route::get('/sendemail','ContactController@index');
Route::get('adminpage','AdminController@index');
Route::get('deletescreen','AboutController@deleteScreen');
Route::get('deleteportfolio','PortfolioController@deleteScreen');
Route::get('deleteservice','HireController@deleteScreen');
Route::get('deletejob','ResumeController@deleteSc');
Route::get('delete/{id}', 'AboutController@deleteData');
Route::get('deleteResume/{id}', 'ResumeController@deleteResume');
Route::get('deletePortfolio/{id}', 'PortfolioController@deletePortfolio');
Route::get('deleteService/{id}', 'HireController@deleteService');
Route::get('update/{id}', 'AboutUpdateController@updateData');
Route::get('updateinDB/{id}', 'AboutUpdateController@updateinDB');
Route::get('updateResume/{id}', 'AboutUpdateController@updateResumeData');
Route::get('updateinResumeDB/{id}', 'AboutUpdateController@updateinResumeDB');
Route::get('updatePortfolio/{id}', 'AboutUpdateController@updatePortfolioData');
Route::get('updateinPortfolioDB/{id}', 'AboutUpdateController@updateinPortfolioDB');
Route::get('updateProduct/{id}', 'AboutUpdateController@updateServiceData');
Route::get('updateinProductDB/{id}', 'AboutUpdateController@updateinServiceDB');
Route::post('insertservice','AdminController@insertService');
Route::post('insertreference','ReferController@insertReference');
Route::post('insertportfolio','PortfolioController@insertPortfolio');
Route::post('insertresume','ResumeController@insertResume');
Route::post('insertcontact','AboutController@insertContact');
Route::get('deletecontact','AboutController@deleteContact');
Route::post('insertskill','SkillController@insertSkill');
Route::get('forms','FormController@index');
Route::get('display','HomeController@index');
Route::get('forget','HomeController@deleteSessionData');
Route::get('back','HomeController@back');
Route::post('submitted','HomeController@submitted');
Route::get('send','MailController@send');
Route::get('/sendemail','SendEmailController@index');
Route::post('/sendemail/send','SendEmailController@send');

