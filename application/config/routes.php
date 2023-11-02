<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';                                            
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
                     
// show create classrom view
$route['home']['get'] = 'HomeController';

// class rooms
$route['class']['get'] = 'classrooms/ClassRoomController';
$route['class/create']['post'] = 'classrooms/ClassRoomController/create';
$route['manage-class']['get'] = 'classrooms/ClassRoomController/manageClass';
$route['classroom/edit/(:any)'] = 'classrooms/ClassRoomController/edit/$1';
$route['classroom/update/(:any)'] = 'classrooms/ClassRoomController/update/$1';
$route['classroom/delete/(:any)'] = 'classrooms/ClassRoomController/delete/$1';

// subject
$route['subject'] = 'Subjects/SubjectController';
$route['subject/createSubject'] = 'Subjects/SubjectController/createSubject';
$route['manage-subject']['get'] = 'Subjects/SubjectController/manageSubject';
$route['subject/edit/(:any)'] = 'Subjects/SubjectController/edit/$1';
$route['subject/update/(:any)'] = 'Subjects/SubjectController/update/$1';
$route['subject/delete/(:any)'] = 'Subjects/SubjectController/delete/$1';
// subject combination
$route['combination']['get'] = 'Subjects/SubjectController/combination';
$route['combination/create']['post'] = 'Subjects/SubjectController/createcombine';
$route['manage-combine'] = 'Subjects/SubjectController/manageCombine';
$route['active/(:any)'] = 'Subjects/SubjectController/statusActive/$1';
$route['deactive/(:any)'] = 'Subjects/SubjectController/statusDeactive/$1';
// student
$route['student'] = 'Students/StudentController';
$route['createStudent'] = 'Students/StudentController/createStudent';
$route['manage-student']['get'] = 'Students/StudentController/manageStudent';
$route['student/edit/(:any)'] = 'Students/StudentController/edit/$1';
$route['student/update/(:any)'] = 'Students/StudentController/update/$1';
//result
$route['result']['get'] = 'Results/ResultController';
$route['result/load_student']['post'] = 'Results/ResultController/loadStudent';
$route['result/load_subject']['post'] = 'Results/ResultController/loadSubject';
$route['result/create-result']['post'] = 'Results/ResultController/createResult';
$route['manage-result']['get'] = 'Results/ResultController/manageResult';










