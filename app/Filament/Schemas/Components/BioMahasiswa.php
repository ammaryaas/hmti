<?php

namespace App\Filament\Schemas\Components;

use Filament\Schemas\Components\Component;

class BioMahasiswa extends Component
{
    protected string $view = 'filament.schemas.components.bio-mahasiswa';

    final public function __construct(string $id)
    {
        $this->id($id);
    }

    public static function make(string $id = 'bio_mahasiswa'): static
    {
        return app(static::class, ['id' => $id]);
    }

    private function getMahasiswaState(string $key): mixed
    {
        // ambil state field lain di Filament v5
        return data_get($this->getLivewire()->data, $key) ?? null;
    }

    public function getFoto(): ?string
    {
        $foto = $this->getMahasiswaState('foto');

        if (!$foto) return null;

        if (is_array($foto)) {
            $foto = collect($foto)->first();
        }

        return asset('storage/' . $foto);
    }

    public function getInitials(): string
    {
        $nama = (string) ($this->getMahasiswaState('nama') ?? '?');

        return collect(explode(' ', trim($nama)))
            ->take(2)
            ->map(fn (string $word) => strtoupper(substr($word, 0, 1)))
            ->implode('');
    }

    public function getNama(): string
    {
        return (string) ($this->getMahasiswaState('nama') ?? '-');
    }

    public function getAngkatan(): string
    {
        return (string) ($this->getMahasiswaState('angkatan') ?? '-');
    }
}