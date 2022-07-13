<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminEditAttributesComponent extends Component
{
    public $name;
    public $attribute_id;

    public function mount($attribute_id){
        $pattribute = ProductAttribute::find($attribute_id);
        $this->attribute_id  =$pattribute->id;
        $this->name = $pattribute->name;
        
    }
    public function update($fields){
        $this->validateOnly($fields,[
            'name' => 'required'

        ]);
    }
    public function updateAttribute(){
        $this->validate([
'name'=>'required'
        ]);
        $pattribute = ProductAttribute::find($this->attribute_id);
        $pattribute->name =$this->name;
        $pattribute->save();
        session()->flash('message','Attrubute has been updated sucssefully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-attributes-component')->layout('layouts.base');
    }
}
