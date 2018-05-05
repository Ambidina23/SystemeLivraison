<?php
/**
 * Get users collection.
 *
 * @param  int  $n
 * @param  string  $role
 * @return Illuminate\Support\Collection
 */
public function index($n, $role)
{
    if($role != 'total')
    {
        return $this->model
        ->with('role')
        ->whereHas('role', function($q) use($role) {
            $q->whereSlug($role);
        })      
        ->oldest('seen')
        ->latest()
        ->paginate($n);          
    }
 
    return $this->model
    ->with('role')       
    ->oldest('seen')
    ->latest()
    ->paginate($n);
}