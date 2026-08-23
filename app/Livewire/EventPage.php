<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\View\View;
use Livewire\Component;

class EventPage extends Component
{
    public function render()
    {
        return view('event-page', [
            'event' => Event::query()
                ->where('is_published', true)
                ->where(function ($q) {
                    $q->where(function ($q) {
                        $q->where('start_at', '>', now())
                          ->where('start_at', '<=', now()->addMonth(2));
                    })
                    ->orWhere(function ($q) {
                        $q->where('start_at', '<=', now())
                          ->where(function ($q) {
                              $q->where('end_at', '>=', now())
                                ->orWhere(function ($q) {
                                    $q->whereNull('end_at')
                                      ->where('start_at', '>=', now()->startOfDay());
                                });
                          });
                    });
                })
                ->orderBy('start_at')
                ->get()
        ])
        ->layout('layouts.app', [
            'title' => 'Event - HMTI',
            'bodyClass' => 'text-slate-900 antialiased bg-[#c0736e]', 
            'activeNav' => 'event'
        ]);
    }
}
