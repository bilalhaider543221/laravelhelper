<?php

namespace laravelhelper\LaravelIideHelper\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FileManagerController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->input('path', base_path());
        $directories = glob($path . '/*', GLOB_ONLYDIR);
        $files = glob($path . '/*.{php,txt,html,css,js}', GLOB_BRACE);
        return view('laravel-iide-helper::file-manager', compact('directories', 'files', 'path'));
    }
    public function delete(Request $request)
    {
        $path = $request->input('path');

        if (!$path || !File::exists($path)) {
            return back()->withErrors(['error' => 'File not found.']);
        }

        try {
            File::delete($path);
            return back()->with('success', 'File deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error deleting file: ' . $e->getMessage()]);
        }
    }
}
