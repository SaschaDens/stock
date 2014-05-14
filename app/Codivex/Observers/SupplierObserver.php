<?php namespace Codivex\Observers;

use Auth;

class SupplierObserver extends BaseObserver implements ObserverInterface{
    public function updated($model){
        $this->createLog(Auth::user()->id, "Update Supplier");
    }
    public function created($model){
        $this->createLog(Auth::user()->id, "Created Supplier");
    }
    public function deleted($model){
        $this->createLog(Auth::user()->id, "Delete Supplier");
    }
}