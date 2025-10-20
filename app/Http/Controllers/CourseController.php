<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourses(): Collection
    {
        return Course::all();
    }

    public function getCourseById($id)
    {
        return Course::find($id);
    }

    public function createCourse(Request $request)
    {
        // the name of the params must match the db column names
        Course::create($request->all());
        /* return $request->all(); */
        return "The course has been created";
    }

    public function updateCourse(Request $request, $id)
    {
        // find the course to udpate
        $course = Course::find($id);
        $course->fill($request->all());
        $course->save();
        return "The course has been updated";
    }

    public function deleteCourse($id)
    {
        // find the course to delete
        $course = Course::find($id);
        $course->delete();
        return "The course has been deleted";
    }

    public function getSumOfAllCourseCredits()
    {
        // find and return total number of credits
        $total_credits = Course::where("id", ">", 0)->sum("nb_of_credits");
        return "The total number of credits of all the courses is " . $total_credits;
    }

    public function findCoursesWithinCodes()
    {
        /* $codes = ["ECON322", "CALC324", "DB324"]; */
        $codes = ["ECON322", "CALC324", "DB324", "DB524"];
        // find the course within the codes
        return Course::whereIn("code", $codes)->get();
    }
}


/*

building a payload
{
 "name" : "Economics For Engineers",
 "code" : "ECON322",
 "nb_of_credits" : 3,
 "description" : "This course teaches the fundamentals of economics to students"
}


 "name"
 "code"
 "nb_of_credits"
 "description"
*/
