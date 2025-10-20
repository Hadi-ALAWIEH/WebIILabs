<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("json", function () {
    $data = [
        "name" => "Jason",
        "age" => 19
    ];
    return response()->json($data);
});

Route::get("another-test", function () {
    return response()->json("")->header("hello", "bye");
});

Route::get("last-test", function () {
    return response()->json("")->withHeaders(["hello" => "bye", "Snack" => "otherSnack"]);
});

Route::get("reach-request", function (Request $request) {
    return "The content type is: " . $request->header('method');
});

Route::get("test", function () {
    return "Hello there";
});

Route::get("data", [DataController::class, "index"]);

// GET courses
Route::get("courses/get-all-courses", [CourseController::class, "getAllCourses"]);
Route::get("courses/get-course/{id}", [CourseController::class, "getCourseById"]);

// POST courses
Route::post("courses/create-course", [CourseController::class, "createCourse"]);

// PUT courses
Route::put("courses/update-course/{id}", [CourseController::class, "updateCourse"]);

// DELETE courses
Route::delete("courses/delete-course/{id}", [CourseController::class, "deleteCourse"]);

// GET total number of course credits
Route::get("courses/get-total-credits", [CourseController::class, "getSumOfAllCourseCredits"]);

// GET courses within codes
Route::get("courses/get-courses-within", [CourseController::class, "findCoursesWithinCodes"]);
