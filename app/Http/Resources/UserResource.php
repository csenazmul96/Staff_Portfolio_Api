<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'designation'=> $this->designation,
            'email'=> $this->email,
            'department'=> $this->department,
            'office_id'=> $this->office_id,
            'dob'=> $this->dob,
            'joining_date'=> $this->joining_date,
            'job_continue'=> $this->job_continue,
            'status'=> $this->status,
            'phone_number'=> $this->phone_number,
            'permanent_address'=> $this->permanent_address,
            'current_address'=> $this->current_address,
            'nid'=> $this->nid,
            'passport'=> $this->passport,
            'f_name'=> $this->f_name,
            'm_name'=> $this->m_name,
            'avatar'=> $this->avatar,
            'banner'=> $this->banner,
            'created_at'=> $this->created_at ? $this->created_at->format('m-d-Y h:i:s A') : '',
        ];
    }
}
