<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\StudentInfo;
use Livewire\Component;

class HomeStudentInfo extends Component
{
    public function visit(int $id)
    {
        $item = StudentInfo::find($id);
        if ($item) {
            $item->increment('views');
            return redirect()->away($item->link);
        }
    }

    public function render()
    {
        $events = Event::query()
            ->where('is_published', true)
            ->where(function ($q) {
                $q->where(function ($q) {
                    $q->where('start_at', '>', now())
                      ->where('start_at', '<=', now()->addMonth());
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
            ->take(3)
            ->get();

        // Jika tidak ada event yang sedang aktif/akan datang, ambil 3 event published terbaru
        if ($events->isEmpty()) {
            $events = Event::query()
                ->where('is_published', true)
                ->orderByDesc('start_at')
                ->take(3)
                ->get();
        }

        $studentInfos = StudentInfo::query()
            ->where('is_active', true)
            ->latest()
            ->take(6)
            ->get();

        return view('livewire.home-student-info', [
            'events' => $events,
            'studentInfos' => $studentInfos,
        ]);
    }
}
