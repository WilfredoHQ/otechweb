<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Service;
use App\Opinions;
use App\Collaborator;
use App\Project;

class PageController extends Controller
{
    public function index(){
    	$services = Service::all();
    	$opinions = Opinions::all();
    	return view('web.index', compact('services', 'opinions'));
    }

    public function about(){
    	$collaborators = Collaborator::all();
    	return view('web.nosotros', compact('collaborators'));
    }

    public function services(){
    	$services = Service::all();
    	return view('web.servicios', compact('services'));
    }

    public function projects(){
    	$projects = Project::all();
    	return view('web.proyectos', compact('projects'));
    }

    public function contact(){
    	return view('web.contacto');
    }
}
