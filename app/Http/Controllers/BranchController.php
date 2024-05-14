<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use Illuminate\Http\Request;
use Spatie\FlareClient\Report;

class BranchController extends Controller
{
    public function all()
    {
        $branches = Branch::orderBy('created_at','desc')->paginate(1);

        return view('branches.index', ['branches' => $branches]);
    }

    public function addBranch(){
        $Branch = Branch::create();
        
        if($Branch)
            return redirect()->back();
        
        return abort(503);
    }

    public function updateBranch(UpdateBranchRequest $request){
        
        $data = $request->all();
        $branch = Branch::where('branch_no',$data['branch_no'])->first();
        unset($data['branch_no']);

        $new_branch = $branch->update($data);
        if($new_branch)
            return redirect()->back();

        return abort(503);
        
    }

    // public function destroy(Branch $Branch)
    // {
    //     $Branch->delete();
    //     return redirect()->route('branches.index');
    // }
}
