<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Http\Resources\Medicine as MedicineResource;
use Illuminate\Http\Request;
use App\Http\Requests;

class MedicineController extends Controller
{

    public function index()
    {
        //Get Medicine
        $medicine = Medicine::paginate(15);
        //return collection of medicine as resource
        return MedicineResource::collection($medicine);
    }

    public function show($id)
    {
        //Get medicine
        $medicine = Medicine::findOrFail($id);
        //return a single Medicine as resource
        return new MedicineResource($medicine);
    }


    public function update(Request $request, $user_id, $medicineName)
    {
        //return 1;
        //$medicine = Medicine::findOrfail(['user_id' => $user_id, 'medicineName' => $medicineName]);
        $medicine = Medicine::where('user_id', $user_id)
            ->where('medicineName', $medicineName)->first();

        $medicine->numOfDose = $request->get('numOfDose');
        $medicine->durationInDays = $request->get('durationInDays');
        $medicine->medicineName = $request->get('medicineName');
        $medicine->locationNum = $request->get('locationNum');
        $medicine->timesNum = $request->get('timesNum');

        $medicine->save();
        return $medicine;
        /* $medicine = Medicine::findOrFail($user_id);

         $this->validate($request, [
             'locationNum' => 'required',
         ]);

         $input = $request->all();
         $medicine->update($input)->save();
         return $medicine;*/

        //


        //$medicine->update($request->all());
        //$medicine=$request->all();
        // $medicine->fill($request->all());
        //Medicine::find($id)->update($medicine);
        //return 'success';
        /* $medicine = new Medicine();
         Medicine::where('id',$id)->update($request->all());
        // return redirect('/medicine')
             return new MedicineResource($medicine);*/
    }


    public function store(Request $request)
    {
        //$medicine = $request->isMethod('put') ? Medicine::findOrFail
        //($request->medicine_id) : new Medicine;
        $medicine = new Medicine();
        //$medicine->id = $request->input('medicine_id');
        $medicine->user_id = $request->input('user_id');
        $medicine->medicineName = $request->input('medicineName');
        $medicine->locationNum = $request->input('locationNum');
        $days = $request->input('durationInMonths') * 30 +
            $request->input('durationInWeeks') * 7 +
            $request->input('durationInDays');
        //$medicine->durationInMonths = $request->input('durationInMonths');
        //$medicine->durationInWeeks = $request->input('durationInWeeks');
        $medicine->durationInDays = $days; //$request->input('durationInDays');
        $medicine->timesNum = $request->input('timesNum');
        $medicine->numOfDose = $request->input('numOfDose');

        if ($medicine->save()) {
            //return ["Hello", 1];
            return new MedicineResource($medicine);
        }
    }

    public function destroy($id)
    {
        //Get medicine
        $medicine = Medicine::findOrFail($id);
        if ($medicine->delete()) {
            return new MedicineResource($medicine);

        }
    }


    /*public function insert(Request $request)
    {
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->mobile=$request->input('mobile');
        $user->password=$request->input('password');
        $user->save();

    }*/


}
