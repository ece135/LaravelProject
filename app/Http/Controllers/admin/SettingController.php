<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first() ?? new Setting();
        
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        
        if ($setting) {
            $setting->update($request->all());
        } else {
            Setting::create($request->all());
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
