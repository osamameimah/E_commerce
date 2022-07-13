<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Attribute;
use Livewire\Component;

class AdminAttributesComponent extends Component
{
    public function deleteAttribute($attribute_id){
        $pattribute = ProductAttribute::find($attribute_id);
        $pattribute->delete();
        session()->flash('message','Attribute has been deleted Successfully!');
    }
    public function render()
    {
        $patteributes = ProductAttribute::paginate(10);
        return view('livewire.admin.admin-attributes-component',['patteributes'=>$patteributes])->layout('layouts.base');
    }
}
