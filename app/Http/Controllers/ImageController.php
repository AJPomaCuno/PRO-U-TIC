public function index(){
        return view('componentesDasboard.headerConfig');
    }
    public function uploadImage(Request $request)
    {
        $request->validate([
            //'image' => 'required|image|dimensions:max_width=1024,max_height=768',
            'image' => 'required|image',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/backgrounds'), $imageName);
        $request->session()->put('imageName', $imageName);
        return redirect()->route('index');
    }

    private function saveImageInfo($imageName)
    {
        $file = fopen(public_path('image_info.txt'), "w");
        fwrite($file, $imageName);
        fclose($file);
    }

    public function deleteImage($imageName) {
        $imagePath = public_path('assets/images/backgrounds/' . $imageName);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        return redirect()->back()->with('success', 'Imagen eliminada correctamente');
    }

    public function updateImage(Request $request, $imageName)
    {
        $imagePath = public_path('assets/images/backgrounds/' . $imageName);
        if ($request->hasFile('new_image')) {
            $newImage = $request->file('new_image');
            $newImage->move(public_path('assets/images/backgrounds'), $imageName);
            return redirect()->route('index')->with('success', 'Imagen actualizada correctamente');
        }
        return redirect()->route('index');
    }
