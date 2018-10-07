<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Medicine extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'medicineName'=>$this->medicineName,
            'locationNum'=>$this->locationNum,
          //'durationInMonths'=>$this->durationInMonths,
         // 'durationInWeeks'=>$this->durationInWeeks,
          'durationInDays'=>$this->durationInDays,
            'timesNum'=>$this->timesNum,
            'numOfDose'=>$this->numOfDose
        ];
       // return parent::toArray($request);
    }
}
