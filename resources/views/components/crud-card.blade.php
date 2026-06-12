@props([
    'title',
    'icon' => 'fa-file-alt',
    'backUrl' => '#',
    'backText' => 'Volver',
    'subtitle' => null,
])

<div class="row">
    <div class="col-12">
        <div class="card shadow border-0 rounded-3">
            <div class="card-header bg-white border-0 py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-1"><i class="fas {{ $icon }}"></i> {{ $title }}</h3>
                        @if($subtitle)
                            <p class="text-sm text-muted mb-0">{{ $subtitle }}</p>
                        @endif
                    </div>
                    <div class="col-auto">
                        <a href="{{ $backUrl }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> {{ $backText }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 py-3">
                {{ $slot }}
            </div>
            @isset($footer)
                <div class="card-footer bg-light border-0 d-flex justify-content-end align-items-center crud-card-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
