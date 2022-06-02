<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();
        return view('admin.chapters.index', compact('chapters'));
    }
    public function blank()
    {
        $data = [];
        for ($i = 1; $i < 9; $i++) {
            $data['chapter_' . $i] = (object)[
                'id' => -1,
                'title' => '',
                'desktop_image' => '',
                'mobile_image' => '',
                'logo' => ''
            ];
        }
        return $data;
    }

    public function map(Request $request)
    {
        $savedDatas = SM::getSetting('chaptermap');
        $datas = $savedDatas != null ? ((array)$savedDatas) : ($this->blank());
        // SM::setSetting('chaptermap',$datas);
        // dd($datas);
        if ($request->getMethod() == "POST") {
            $newdata = [];
            for ($i = 1; $i < 9; $i++) {
                $olddata = $datas['chapter_' . $i];
                $newdata['chapter_' . $i] = [
                    'id' => $request->input('id_' . $i) ?? $olddata->id,
                    'title' => $request->input('title_' . $i) ?? $olddata->title,
                    'desktop_image' => $request->hasFile('desktop_image_' . $i) ? $request->file('desktop_image_' . $i)->store('uploads/chaptermap') : $olddata->desktop_image,
                    'mobile_image' => $request->hasFile('mobile_image_' . $i) ? $request->file('mobile_image_' . $i)->store('uploads/chaptermap') : $olddata->mobile_image,
                    'logo' => $request->hasFile('logo_' . $i) ? $request->file('logo_' . $i)->store('uploads/chaptermap') : $olddata->logo
                ];
            }
            SM::setSetting('chaptermap', $newdata);
            return redirect()->back();
        } else {
            $imgarr = ["600px X 600px", "322px X 506px", "322px X 506px", "675px X 281px", "322px X 506px", "322px X 506px", "675px X 281px", "600px X 600px"];
            $chapters = DB::table('chapters')->get(['id', 'name']);
            return view('admin.chapters.map', compact('chapters', 'datas', 'imgarr'));
        }
    }

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $chapter = new Chapter();
            $chapter->name = $request->name;
            $chapter->desc = $request->desc;
            $chapter->short_desc = $request->short_desc;
            $chapter->image = $request->image->store('uploads/chapter');
            $chapter->save();
            return redirect()->back()->with('message', 'Chapter Saved Sucessfully');
        } else {
            return view('admin.chapters.add');
        }
    }

    public function edit(Request $request, Chapter $chapter)
    {
        if ($request->getMethod() == "POST") {
            $chapter->name = $request->name;
            $chapter->desc = $request->desc;
            $chapter->short_desc = $request->short_desc;
            if ($request->hasFile('image')) {
                $chapter->image = $request->image->store('uploads/chapter');
            }
            $chapter->save();
            return redirect()->back()->with('message', 'Chapter Saved Sucessfully');
        } else {
            return view('admin.chapters.edit', compact('chapter'));
        }
    }
}
