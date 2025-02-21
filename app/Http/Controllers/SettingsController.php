<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('settings', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'setting_key' => 'required|string|unique:settings,setting_key',
            'setting_value' => 'required|string',
        ]);

        Setting::create([
            'setting_key' => $request->setting_key,
            'setting_value' => $request->setting_value
        ]);

        return redirect()->route('settings')->with('success', 'Setting added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'setting_key' => 'required|string|unique:settings,setting_key,' . $id,
            'setting_value' => 'required|string',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->update([
            'setting_key' => $request->setting_key,
            'setting_value' => $request->setting_value
        ]);

        return redirect()->route('settings')->with('success', 'Setting updated successfully.');
    }

    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();

        return redirect()->route('settings')->with('success', 'Setting deleted successfully.');
    }
}
