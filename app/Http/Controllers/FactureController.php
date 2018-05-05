<!--

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
   public function upload(Request $request)
    {
        $uniqueFileName = uniqid() . $request->get('upload_file')->getClientOriginalName() . '.' . $request->get('upload_file')->getClientOriginalExtension());

        $request->get('upload_file')->move(public_path('files') . $uniqueFileName);

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }

   }
}